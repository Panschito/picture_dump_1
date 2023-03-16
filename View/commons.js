const modal = new bootstrap.Modal(
    document.getElementById("fullsceenImage"), {}
);

const images = [];

function triggerModal({
    thumb,
    title,
    src
}) {
    const body = modal._dialog.querySelector('.modal-body');
    const img = document.createElement('img');
    img.setAttribute('src', src)
    img.setAttribute('class', 'img-fluid w-100 zoom-out')
    img.addEventListener('click', () => modal.hide());

    body.replaceChildren(img);

    modal.show();
}

function Image({
    thumb,
    title,
    src
}) {
    const img = document.createElement('img');
    img.setAttribute('src', thumb);
    img.setAttribute('class', 'img-fluid w-100 zoom-in rounded');
    img.setAttribute('alt', title);
    img.addEventListener('click', () => triggerModal({ thumb, title, src }));

    return img;
}

function Like({ liked }) {
    let iconClass = liked ?
        'mdi mdi-thumb-up' :
        'mdi mdi-thumb-up-outline';

    const icon = document.createElement('span');

    function onIconClick(ev) {
        ev.preventDefault();
        ev.stopPropagation();

        liked = !liked;

        iconClass = liked ?
            'mdi mdi-thumb-up' :
            'mdi mdi-thumb-up-outline';

        icon.setAttribute('class', `${iconClass} fs-4 pointer`);
    }

    icon.setAttribute('class', `${iconClass} fs-4 pointer`);
    icon.addEventListener('click', onIconClick);

    return icon;
}

function fetchImages(lastFetch = 0) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const items = images.filter((i) => i.created === lastFetch);

            resolve(items);
        }, 500)
    });
}