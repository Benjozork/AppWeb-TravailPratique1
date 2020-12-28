const request = {
    headers: new Headers({
        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    })
};

const toStatus = async response => response.status === 200;

export async function login(email, password) {
    const url = '/api/users/token';

    const details = { email, password };

    let formBody = [];
    for (const property in details) {
        const encodedKey = encodeURIComponent(property);
        const encodedValue = encodeURIComponent(details[property]);
        formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");

    return (await fetch(url, {...request, method: 'POST', body: formBody})).json().then(response => {
        localStorage.setItem('token', response.data.token);
        localStorage.setItem('id', response.data.id);
    });
}

export async function changePassword(newPassword) {
    const url = '/api/users/' + localStorage.getItem('id');

    const details = { password: newPassword };

    let formBody = [];
    for (const property in details) {
        const encodedKey = encodeURIComponent(property);
        const encodedValue = encodeURIComponent(details[property]);
        formBody.push(encodedKey + "=" + encodedValue);
    }
    formBody = formBody.join("&");

    return fetch(url, {...request, method: 'PATCH', body: formBody}).then(toStatus);
}

export function logout() {
    localStorage.removeItem('token');
}
