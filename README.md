# Learning Hub – Moodle 4.5 Theme

> A modern, responsive Moodle theme designed for a professional corporate Learning Management System.

Learning Hub is a custom Moodle theme focused on creating a clean, engaging and professional learner experience while retaining Moodle's native functionality and extensibility.

---

## ✨ Features

- 🎨 Modern corporate LMS interface
- 📱 Fully responsive design
- 🔐 Custom premium login experience
- 🏠 Custom Moodle front page
- 🧩 Modular SCSS architecture
- 🖼️ Configurable logo, compact logo and favicon
- ⚙️ Custom theme settings
- 🎯 Custom Moodle renderer overrides
- 🧭 Enhanced navigation styling
- 🌐 Moodle Boost parent theme integration
- ♿ Built on Moodle's native UI and accessibility framework

---

## 🎨 Design

Learning Hub uses a modular SCSS architecture to keep the theme maintainable, scalable and easy to customize.

```text
scss/
├── abstracts/
│   └── _variables.scss
├── components/
│   ├── _header.scss
│   └── _layout.scss
└── pages/
    ├── _frontpage.scss
    └── _login.scss
SCSS Architecture
abstracts/ – Theme variables and design tokens
components/ – Shared interface components
pages/ – Page-specific styling

This structure keeps visual styling separated into reusable components and makes future customization easier.

🔐 Custom Login Experience

Learning Hub includes a custom login experience designed around a clean, minimal corporate LMS interface.

Login features
Custom Learning Hub branding
Responsive login layout
Premium card-based interface
Styled authentication form
Guest access support
Password recovery support
Moodle-native authentication functionality
Responsive mobile layout

The authentication process remains powered by Moodle while the visual experience is customized through the theme.

🏠 Custom Front Page

The theme includes a customized Moodle front page designed to provide a more engaging entry point for learners.

The front page architecture supports:

Learning Hub branding
Hero content
Learning-focused sections
Responsive layouts
Custom visual components
Moodle-native navigation and functionality
⚙️ Theme Settings

Learning Hub provides configurable theme settings for:

Logo
Compact logo
Favicon
Brand name
Contact name
Contact email
Primary theme color

These settings allow administrators to configure the visual identity of the LMS without modifying the theme source code.

🧩 Theme Structure
learninghub/
│
├── classes/
│   └── output/
│       └── core_renderer.php
│
├── lang/
│   └── en/
│       └── theme_learninghub.php
│
├── layout/
│   ├── contact.php
│   ├── frontpage.php
│   └── login.php
│
├── pix/
│   └── shahrukh-cutout.png
│
├── scss/
│   ├── abstracts/
│   │   └── _variables.scss
│   ├── components/
│   │   ├── _header.scss
│   │   └── _layout.scss
│   └── pages/
│       ├── _frontpage.scss
│       └── _login.scss
│
├── templates/
│   ├── columns2.mustache
│   ├── frontpage.mustache
│   ├── head.mustache
│   └── login.mustache
│
├── config.php
├── contact.php
├── lib.php
├── settings.php
└── version.php
🛠️ Technologies
Technology	Usage
Moodle 4.5	LMS platform
PHP	Theme logic and Moodle integration
Mustache	Moodle templates
SCSS	UI styling
HTML	Interface structure
JavaScript	Moodle-native frontend functionality
Moodle Boost	Parent theme
📦 Installation
1. Download the repository
git clone https://github.com/muhammadshahrukh285-coder/moodle-theme-learninghub.git
2. Copy the theme

Copy the learninghub directory into:

moodle/theme/learninghub

The final structure should be:

moodle/
└── theme/
    └── learninghub/
3. Install through Moodle

Log in to Moodle as an administrator.

Navigate to:

Site administration → Notifications

Moodle will detect the new theme and complete the installation.

4. Activate the theme

Navigate to:

Site administration
→ Appearance
→ Theme selector

Select:

Learning Hub
🔧 Development

This project demonstrates practical Moodle theme development including:

Moodle theme configuration
Child theme development
PHP theme callbacks
Moodle renderer overrides
Mustache templates
SCSS architecture
Responsive UI development
Moodle theme settings
Custom login layouts
Front page customization

The theme is designed to serve as a foundation for further LMS customization.

🚀 Roadmap

Planned enhancements include:

Dashboard
Custom learner dashboard
Welcome / hero dashboard block
Continue Learning section
Course progress components
Learning activity cards
Upcoming learning section
Achievement components
UI
Additional responsive improvements
Enhanced course page experience
Improved learner navigation
Additional reusable interface components
Moodle Extensions
Custom dashboard blocks
Learning analytics components
Progress visualization
Learner-focused widgets
📸 Screenshots

Screenshots of the Learning Hub interface will be added as the theme evolves.

Planned showcase:

Login page
Front page
Learner dashboard
Course page
Mobile experience
🎯 Project Purpose

Learning Hub was developed as a portfolio project to demonstrate practical Moodle LMS development and frontend customization.

The project focuses on building a modern LMS experience while maintaining Moodle's native architecture and extensibility.

📋 Requirements
Moodle 4.5
Moodle Boost parent theme
PHP version supported by Moodle 4.5
📄 License

This project is provided for demonstration and portfolio purposes.
