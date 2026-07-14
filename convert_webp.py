from PIL import Image
import os

base_dir = '/Applications/XAMPP/xamppfiles/htdocs/bslgaming2/www.wagergeeks.com/public/img/aws-images/'
files = [
    'BSL Gaming-logo',
    'BSL Gaming-footer-logo',
    'WagerGeeks-logo',
    'WagerGeeks-footer-logo'
]

for f in files:
    png_path = base_dir + f + '.png'
    webp_path = base_dir + f + '.webp'
    if os.path.exists(png_path):
        img = Image.open(png_path)
        img.save(webp_path, 'WEBP')
        print(f"Converted {png_path} to {webp_path}")

