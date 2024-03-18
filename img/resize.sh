#jpg/resize.sh
input_file="$1"
output_file="$2"

/f/OSPanel/ImageMagick-7.1.1-Q16-HDRI/magick.exe "$input_file" -resize 300x300 "$output_file"

# Удалить исходный файл после успешного изменения размера
rm "$input_file"