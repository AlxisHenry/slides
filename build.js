import fs from "fs-extra"

const srcDir = "slides"
const destDir = "dist/slides"

try {
  fs.copySync(srcDir, destDir)
} catch (err) {
  console.error("Failed to copy slides directory : ", err)
}