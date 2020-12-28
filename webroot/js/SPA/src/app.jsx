import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import { getStoreTypes } from "./api/StoreTypesClient";

function StoreTypes() {
    const [storeTypes, setStoreTypes] = useState([]);

    useEffect(() => {
        getStoreTypes().then(setStoreTypes);
    }, []);

    return (
        <table cellPadding="0" cellSpacing="0">
            <tbody>
                {
                    storeTypes.map(type =>
                        <tr>
                            <td>{type.id}</td>
                            <td>{type.name}</td>
                            <td className="actions">
                                {/*<?= $this->Html->link(__('View'), ['action' => 'view', $storeType->id]) ?>*/}
                                {/*<?= $this->Html->link(__('Edit'), ['action' => 'edit', $storeType->id]) ?>*/}
                                {/*<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeType->id)]) ?>*/}
                            </td>
                        </tr>
                    )}
            </tbody>
        </table>
    )
}

function App() {
    return (
        <>
            <h1>Hello, world!</h1>

            <div className="storeTypes index large-9 medium-8 columns content">
                <StoreTypes />
            </div>
        </>
    )
}

ReactDOM.render(<App/>, document.getElementById('mount-point'));
