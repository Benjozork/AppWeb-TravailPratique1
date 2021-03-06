const request = {
    headers: new Headers({
        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem("token")
    })
};

const toStatus = async response => response.status === 200;

export async function getStoreTypes() {
    const url = '/api/store_types';

    return await (await fetch(url, request)).json();
}

export async function createStoreType(name) {
    const url = `/api/store_types`;

    const details = { name };

    let formBody = [];
    for (const property in details) {
        const encodedKey = encodeURIComponent(property);
        const encodedValue = encodeURIComponent(details[property]);
        formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");

    return await fetch(url, { ...request, method: 'POST', body: formBody }).then(toStatus);
}

export async function editStoreType(id, name) {
    const url = `/api/store_types/${id}`;

    let formBody = [];
    for (const property in details) {
        const encodedKey = encodeURIComponent(property);
        const encodedValue = encodeURIComponent(details[property]);
        formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");

    return await fetch(url, { ...request, method: 'PUT', body: formBody }).then(toStatus);
}

export async function deleteStoreType(id) {
    const url = `/api/store_types/${id}`;

    return fetch(url, { ...request, method: 'delete' }).then(toStatus);
}
