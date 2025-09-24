# WordPress Homepage Test

This repository contains my skill test project: a custom **WordPress homepage** based on a given [Figma design](https://www.figma.com/design/JRU7syeOq0e7hDd3corwP2/Test-File?node-id=1342-1740).  
The live demo is deployed on **Netlify**.

## 🚀 Demo
🔗 [Live Demo on Netlify](https://candid-douhua-22f3db.netlify.app/)

## ✨ Features
- Custom WordPress theme (`wp-content/themes/customgoo/`)
- Responsive layout following the provided design
- Clean structure with assets separated (CSS, JS, images, fonts)
- **Custom Post Types (CPT)** created via plugin
- **Advanced Custom Fields (ACF)** used for flexible content management

## 🛠️ Tech Stack
- **WordPress** (base CMS)
- **PHP** (theme template)
- **CSS** for styling
- **JavaScript** for interactivity
- **ACF Plugin** for custom fields
- **Custom CPT Plugin** for additional post types

## 📂 Project Structure
```
wp-content/
├── themes/
│   ├── customgoo/
│   │   ├── assets/
│   │   │   ├── css/
│   │   │   ├── fonts/
│   │   │   ├── img/
│   │   │   └── js/
│   │   ├── footer.php
│   │   ├── front-page.php
│   │   ├── functions.php
│   │   ├── header.php
│   │   ├── style.css
│   │   └── index.php
└── README.md
```

## ⚙️ Setup & Usage
1. Clone the repository
   ```bash
   git clone git@github.com:argorilla/test-homepage.git
2. Copy the theme folder to your WordPress installation:
    ```bash
   wp-content/themes/customgoo/
3. Copy the custom plugin(s) if needed:
    ```bash
    wp-content/plugins/custom-cpt/
4. Install and activate Advanced Custom Fields (ACF) plugin.
5. Activate the theme from WordPress dashboard.
