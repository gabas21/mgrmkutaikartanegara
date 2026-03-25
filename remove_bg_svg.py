import base64
import re
from PIL import Image
import io

files = [
    r"c:\laragon\www\mgrmkutaikartanegara\public\images\mmp.svg",
    r"c:\laragon\www\mgrmkutaikartanegara\public\images\kide.svg",
    r"c:\laragon\www\mgrmkutaikartanegara\public\images\tp.svg"
]

def make_white_transparent(img):
    img = img.convert("RGBA")
    datas = img.getdata()
    
    newData = []
    # Make anything close to white transparent
    for item in datas:
        if item[0] > 240 and item[1] > 240 and item[2] > 240:
            newData.append((255, 255, 255, 0))
        else:
            newData.append(item)
    
    img.putdata(newData)
    return img

for filepath in files:
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        match = re.search(r'href="data:image/[^;]+;base64,([^"]+)"', content)
        if match:
            b64_data = match.group(1)
            img_data = base64.b64decode(b64_data)
            
            img = Image.open(io.BytesIO(img_data))
            img = make_white_transparent(img)
            
            buffered = io.BytesIO()
            img.save(buffered, format="PNG")
            img_str = base64.b64encode(buffered.getvalue()).decode("utf-8")
            
            new_content = content.replace(b64_data, img_str)
            
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Processed {filepath}")
        else:
            print(f"No base64 data found in {filepath}")
    except Exception as e:
        print(f"Error processing {filepath}: {e}")
