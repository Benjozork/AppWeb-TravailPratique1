import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import {createStoreType, deleteStoreType, editStoreType, getStoreTypes} from "./api/StoreTypesClient";
import {changePassword, login, logout} from "./api/AuthClient";

const authenticated = { state: false, type: undefined };

function StoreType(props) {
    const deleteType = (id) => deleteStoreType(id).then(successful => {
        if (successful) {
            alert('Type de magasin supprimé');
            props.onDelete();
        } else {
            alert('Erreur lors de la suppression du type de magasin');
        }
    });

    const editType = (id) => {
        const newName = prompt('Veuillez entrer le nouveau nom du magasin');

        editStoreType(id, newName).then(successful => {
            if (successful) {
                alert('Type de magasin modifié');
                props.onEdit(newName);
            } else {
                alert('Erreur lors de la modification du type de magasin');
            }
        });
    };

    return (
        <tr>
            <td>{props.type.id}</td>
            <td>{props.type.name}</td>
            {props.loggedIn && <>
                <td className="actions" style={{ display: 'flex', flexDirection: 'row', columnGap: '1em' }}>
                    <span className="text-danger" onClick={() => deleteType(props.type.id)}>Supprimer</span>
                    <span className="text-primary" onClick={() => editType(props.type.id)}>Modifier</span>
                </td>
            </>}
        </tr>
    );
}

function StoreTypes(props) {
    return (
        <table className="table" cellPadding="0" cellSpacing="0">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    {props.loggedIn && <>
                        <th>Action</th>
                    </>}
                </tr>
                {
                    props.storeTypes.map(type =>
                        <StoreType
                            loggedIn={props.loggedIn}
                            key={type.id}
                            type={type}
                            onDelete={() => props.onDelete(type)}
                            onEdit={props.onEdit}
                        />
                    )
                }
            </tbody>
        </table>
    )
}

function App() {
    const [isLoggingIn, setIsLoggingIn] = useState(false);
    const [loggedIn, setLoggedIn] = useState(false);
    const [storeTypes, setStoreTypes] = useState([]);

    const update = () => {
        getStoreTypes().then(setStoreTypes);
    };

    useEffect(() => {
        update();

        const token = localStorage.getItem('token');

        if (token) {
            authenticated.state = true;
        }

        setLoggedIn(authenticated.state);
    }, [])

    const setCreate = () => {
        const name = document.getElementById('input-name').value;

        createStoreType(name)
            .then(successful => {
                if (successful) {
                    alert('Type de magasin créé')
                    update();
                } else {
                    alert('Erreur lors de la création du type de magasin')
                }
            })
    };

    const setChangePassword = () => {
        const newPassword = document.getElementById('input-new-password').value;

        changePassword(newPassword).then(success => {
            if (success) {
                alert('Mot de passe modifié');
            } else {
                alert('Erreur lors de la modification du mot de passe');
            }
        });
    };

    const setLogin = () => {
        const email = document.getElementById('input-login').value;
        const password = document.getElementById('input-password').value;

        login(email, password).then(() => {
            alert('Connecté');

            setLoggedIn(true);
            setIsLoggingIn(false);
        });
    };

    const setLogout = () => {
        logout();

        authenticated.state = false;

        setLoggedIn(authenticated.state);
    };

    return (
        <>
            <div className="storeTypes index large-9 medium-8 columns content">
                {!isLoggingIn ?
                    <>
                        <StoreTypes loggedIn={loggedIn} storeTypes={storeTypes} onDelete={update} onEdit={update} />

                        {loggedIn && <>
                            <h3>Créer un type de magasin</h3>

                            <form>
                                <div className="form-group">
                                    <input id="input-name" className="form-control" type="text" placeholder="Nom" />
                                </div>
                                <div className="form-row">
                                    <button type="button" className="btn btn-success" onClick={() => setCreate()}>Créer</button>
                                </div>
                            </form>

                            <h3>Changer son mot de passe</h3>

                            <form>
                                <div className="form-group">
                                    <input id="input-new-password" className="form-control" type="password" placeholder="Nouveau mot de passe" />
                                </div>
                                <div className="form-row">
                                    <button type="button" className="btn btn-success" onClick={() => setChangePassword()}>Créer</button>
                                </div>
                            </form>
                        </>}

                        {!loggedIn ?
                            <button className="btn btn-dark" onClick={() => setIsLoggingIn(true)}>Se connecter</button>
                            :
                            <button className="btn btn-danger" onClick={() => setLogout()}>Se déconnecter</button>
                        }
                    </>
                    :
                    <>
                        <h3>Se connecter</h3>

                        <form>
                            <div className="form-group">
                                <input id="input-login" className="form-control" type="text" placeholder="E-mail" />
                            </div>
                            <div className="form-group">
                                <input id="input-password" className="form-control" type="password" placeholder="Mot de passe" />
                            </div>
                            <div className="form-row">
                                <button type="button" className="btn btn-success" onClick={setLogin}>Se connecter</button>
                                <button type="button" className="btn btn-dark" onClick={() => setIsLoggingIn(false)}>Annuler</button>
                            </div>
                        </form>
                    </>
                }
            </div>
        </>
    )
}

ReactDOM.render(<App/>, document.getElementById('mount-point'));
