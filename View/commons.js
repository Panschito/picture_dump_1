const modal = new bootstrap.Modal(
    document.getElementById("fullsceenImage"), {}
);

const images = [];

function triggerModal(image, likes = []) {
    const {
        thumb,
        title,
        src,
        id_picture
    } = image;
    console.log(likes);

    console.log('id', id_picture);
    console.log('dhfgh', likes.findIndex((l) => l['id_picture'] == id_picture));
    const liked = likes.findIndex((l) => l.id_picture == id_picture) > -1;

    const body = modal._dialog.querySelector('.modal-body');
    const img = document.createElement('img');
    const like = Like({ id_picture, liked });
    img.setAttribute('src', src)
    img.setAttribute('class', 'img-fluid w-100 zoom-out')
    img.addEventListener('click', () => modal.hide());

    body.replaceChildren(img, like);


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

function Like({ liked, id_picture }) {
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

        const body = new FormData();
        body.append("id_picture", id_picture);
        body.append("liked", liked);
        fetch('main.php', {
            method: "POST",
            body
        })

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