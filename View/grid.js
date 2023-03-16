let msnry = new Masonry('.row', {
  itemSelector: '.col',
  percentPosition: true
});

function ImageContainer(image = {}) {
  const img = Image(image);

  const license = document.createElement('div');
  license.setAttribute('class', 'mdi mdi-creative-commons image-license');
  license.addEventListener('click', () => window.open('https://creativecommons.org/licenses/by/4.0/legalcode', '_blank'))

  const container = document.createElement('div');
  container.setAttribute('class', 'col col-lg-2 col-md-4 col-sm-6 col-6 image-container');
  container.append(img, license);

  img.addEventListener('load', () => msnry.layout());

  return container;
}

function prependImages(images = []) {
  if (images.length === 0) return;

  const cols = images.map((img) => ImageContainer(img, msnry));
  document.getElementById('imageFeed').prepend(...cols);

  msnry = new Masonry('.row', {
    itemSelector: '.col',
    percentPosition: true
  });
}

let lastFetch = 0;

(async function poll() {
  const images = await fetchImages(lastFetch);

  prependImages(images);

  first = false;
  lastFetch += 1;

  setTimeout(poll, 5000)
})();
