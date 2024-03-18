#util/th.sh
input_file="$1"
output_file="th_$1"

/f/OSPanel/ImageMagick-7.1.1-Q16-HDRI/magick.exe "$input_file" -resize 20x20 -quality 80 "$output_file"