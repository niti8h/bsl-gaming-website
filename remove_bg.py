from rembg import remove
from PIL import Image

def process_image(input_path, output_path):
    print(f"Processing {input_path}...")
    try:
        input_image = Image.open(input_path)
        output_image = remove(input_image)
        output_image.save(output_path)
        print(f"Saved to {output_path}")
    except Exception as e:
        print(f"Error processing {input_path}: {e}")

if __name__ == '__main__':
    base_dir = '/Applications/XAMPP/xamppfiles/htdocs/bslgaming2/www.wagergeeks.com/public/img/aws-images/'
    files = [
        'BSL Gaming-logo.webp',
        'BSL Gaming-footer-logo.webp',
        'WagerGeeks-logo.webp',
        'WagerGeeks-footer-logo.webp'
    ]
    for f in files:
        process_image(base_dir + f, base_dir + f.replace('.webp', '.png'))
