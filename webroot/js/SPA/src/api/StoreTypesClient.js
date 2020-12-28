const request = {
    headers: new Headers({
        'Accept': 'application/json'
    })
};

export async function getStoreTypes() {
    const url = '/api/store_types';

    return await (await fetch(url, request)).json();
}
