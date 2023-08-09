function previewImage(btn, file, show) {
  btn.addEventListener("click", () => {
    file.click();
    console.log(file);
  });

  file.addEventListener("change", (e) => {
    console.log(show);
    show.style.backgroundImage = `url(${URL.createObjectURL(
      e.target.files[0]
    )})`;
  });
}
