from rembg import remove
from PIL import Image

input_path = '/Users/vikramnain/.gemini/antigravity/brain/f64a63ce-0679-47e1-9c07-a36506228da9/media__1784050146835.jpg'
output_path = 'public/img/aws-images/iGaming-Software-Development-Services.webp'

input_image = Image.open(input_path)
output_image = remove(input_image)
output_image.save(output_path, format="WEBP")
print("Done!")
