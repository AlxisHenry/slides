import fs from "fs-extra";

const slides = "slides";

try {
  fs.copySync(slides + "/.", "dist/", { recursive: true, overwrite: true });
} catch (err) {
  console.error("Failed to copy slides directory content : ", err);
}
