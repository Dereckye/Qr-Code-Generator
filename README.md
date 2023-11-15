# QR Code Generator

This QR Code Generator is a lightweight web application built with PHP and HTML. It provides a simple and user-friendly interface for generating QR Codes from text input. Whether you need QR Codes for URLs, contact information, or any other text-based data, this tool streamlines the process.

## Features

- **Easy-to-Use Interface:** The web application offers a straightforward interface that allows users to quickly input text and generate QR Codes with a click.
  
- **Responsive Design:** Utilizing the Bootstrap framework, the application ensures a responsive and visually appealing design, making it accessible across various devices.

- **File Management:** Generated QR Code images are saved in the "files" directory with unique filenames based on timestamps, enabling easy organization and retrieval.

## Getting Started

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/your-username/qr-code-generator.git
    ```

2. **Upload Files:**
    Upload the files to your web server or run a local server.

3. **Open Web Page:**
    Open the `index.html` file in your web browser.

## Usage

1. Enter the desired text in the input field.
2. Click the "Generate!" button.
3. A QR Code image will be generated and saved in the "files" directory.
4. A success message will be displayed with a link to view and download the generated QR Code.

## Screenshots

*Enter Text: Users can input the desired text.*
![Enter Text](src/test(1).PNG)

*Generated QR Code: The QR Code image is generated and saved.*
![Generated QR Code](src/test(3).PNG)

*Your QR Code is created!*

![QR Code image](src/3830e71f131b62767bafa1fa4c453609.png)


## Dependencies

- [Bootstrap](https://getbootstrap.com/): Framework for styling.

## Code Attribution

The project utilizes the "qrcode.php" script for generating QR Codes. The script is under the MIT license and portions of it are credited to Kreative Software and Donald Becker.

## Author

Dereck Luiz.

## Acknowledgments

- [Bootstrap](https://getbootstrap.com/) for the responsive styling.
- [qrcode.php](https://github.com/endroid/qr-code) for the QR Code generation script.
