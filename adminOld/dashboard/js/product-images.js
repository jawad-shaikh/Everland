const fileBtn = document.querySelector(".file-btn");
const selectFile = document.querySelector(".select-file");
let bVal = false;

fileBtn.addEventListener("click", (e) => {
  if (
    document
      .querySelector(".images-wrapper")
      .contains(document.querySelector("form.image-box"))
  ) {
    e.preventDefault();
    alert("Please Upload the previous image first");
  } else {
    selectFile.click();
  }
});

selectFile.addEventListener("change", (e) => {
  const newImage = document.querySelector(".new-images-section .image-box img");
  const ImageUrl = URL.createObjectURL(e.target.files[0]);
  const inputElement = e.target.files[0].name;

  const node = e.target;
  const clone = node.cloneNode(true);
  clone.name = "image";

  getImage(ImageUrl, inputElement, clone);
});

function getImage(ImageUrl, inputElement, clone) {
  const imageWrapper = document.querySelector(".images-wrapper");
  const imageMarkup = ` <form action="image-upload-api.php" class="image-box" id="form" method="POST" enctype="multipart/form-data">
                                <img src="${ImageUrl}" alt="" />
                                 <input type="hidden" name="id" value="<?= $Pid ?>" />
                                <button type="submit" class="save-btn" name="upload_image" ><ion-icon name="save-outline"></ion-icon></button>
                            </form>`;
  imageWrapper.insertAdjacentHTML("afterbegin", imageMarkup);

  const form = document.querySelector("form.image-box");
  form.insertAdjacentElement("afterbegin", clone);
}
