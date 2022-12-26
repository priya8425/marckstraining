<html>
    <head>
        <style>
            body {
  padding: 20px;
  font-family: sans-serif;
}
h1 {
  margin-top: 0;
}
input[type=file] {
  margin: 20px 0;
}
img {
  max-height: 100%;
  max-width: 100%;
  box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
}
.dropTarget {
  position: relative;
  border: 3px dashed silver;
  flex-basis: auto;
  flex-grow: 20;
}
.dropTarget::before {
  content: 'Drop files here';
  color: silver;
  font-size: 5vh;
  height: 5vh;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  pointer-events: none;
  user-select: none;
}
#previews > div {
  box-sizing: border-box;
  height: 240px;
  width: 240px;
  padding: 20px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  vertical-align: top;
}
#previews > div > progress {
  width: 80%;
}
.layout {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: stretch;
  align-content: stretch;
  height: calc(100vh - 40px);
}

            </style>
    </head>
    <body>
        <div class="layout">
            <h1>Convert image to webp format</h1>
            <div>
              <input type="file" multiple accept="image/*">
            </div>
            <div id="previews"></div>
            <div class="dropTarget"></div>
          </div>
          <script>
            let refs = {};
refs.imagePreviews = document.querySelector('#previews');
refs.fileSelector = document.querySelector('input[type=file]');

function addImageBox(container) {
  let imageBox = document.createElement("div");
  let progressBox = document.createElement("progress");
  imageBox.appendChild(progressBox);
  container.appendChild(imageBox);
  
  return imageBox;
}

function processFile(file) {
  if (!file) {
    return;
  }
  console.log(file);

  let imageBox = addImageBox(refs.imagePreviews);

  // Load the data into an image
  new Promise(function (resolve, reject) {
    let rawImage = new Image();

    rawImage.addEventListener("load", function () {
      resolve(rawImage);
    });

    rawImage.src = URL.createObjectURL(file);
  })
  .then(function (rawImage) {
    // Convert image to webp ObjectURL via a canvas blob
    return new Promise(function (resolve, reject) {
      let canvas = document.createElement('canvas');
      let ctx = canvas.getContext("2d");

      canvas.width = rawImage.width;
      canvas.height = rawImage.height;
      ctx.drawImage(rawImage, 0, 0);

      canvas.toBlob(function (blob) {
        resolve(URL.createObjectURL(blob));
      }, "image/webp");
    });
  })
  .then(function (imageURL) {
    // Load image for display on the page
    return new Promise(function (resolve, reject) {
      let scaledImg = new Image();

      scaledImg.addEventListener("load", function () {
        resolve({imageURL, scaledImg});
      });

      scaledImg.setAttribute("src", imageURL);
    });
  })
  .then(function (data) {
    // Inject into the DOM
    let imageLink = document.createElement("a");

    imageLink.setAttribute("href", data.imageURL);
    imageLink.setAttribute('download', `${file.name}.webp`);
    imageLink.appendChild(data.scaledImg);

    imageBox.innerHTML = "";
    imageBox.appendChild(imageLink);
  });
}

function processFiles(files) {
  for (let file of files) {
    processFile(file);
  }
}

function fileSelectorChanged() {
  processFiles(refs.fileSelector.files);
  refs.fileSelector.value = "";
}

refs.fileSelector.addEventListener("change", fileSelectorChanged);

// Set up Drag and Drop
function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

function drop(callback, e) {
  e.stopPropagation();
  e.preventDefault();
  callback(e.dataTransfer.files);
}

function setDragDrop(area, callback) {
  area.addEventListener("dragenter", dragenter, false);
  area.addEventListener("dragover", dragover, false);
  area.addEventListener("drop", function (e) { drop(callback, e); }, false);
}
setDragDrop(document.documentElement, processFiles);
            </script>
    </body>
</html>