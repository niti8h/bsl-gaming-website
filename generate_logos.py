from PIL import Image, ImageDraw, ImageFont

logos = {
    'logo-aws.png': 'AWS',
    'logo-rails-1.png': 'Rails',
    'logo-django-1.png': 'Django',
    'logo-langchain.png': 'Langchain',
    'logo-mongodb.png': 'MongoDB',
    'logom-react.png': 'React',
    'logo-andmore-1.png': 'And More'
}

for filename, text in logos.items():
    img = Image.new('RGBA', (200, 100), color=(255, 255, 255, 0))
    d = ImageDraw.Draw(img)
    # Draw simple rounded rect or just text
    # We will just write text in white color since it's on a dark background probably
    d.text((50, 40), text, fill=(212, 175, 55)) # Royal Gold text
    img.save(f'public/img/aws-images/{filename}')
    print(f'Generated {filename}')
