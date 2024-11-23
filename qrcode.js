// Function to generate QR codes with links
function generateQRCodes(artworks) {
    const qrContainer = document.getElementById('qr-container'); // Container for QR codes

    artworks.forEach(artwork => {
        // Create a container for this artwork's QR code
        const qrItem = document.createElement('div');
        qrItem.className = 'qr-item';

        // Add title
        const title = document.createElement('h3');
        title.textContent = artwork.title;
        qrItem.appendChild(title);

        // Create a canvas element for the QR code
        const qrCanvas = document.createElement('canvas');
        qrCanvas.id = `qr-code-${artwork.id}`;
        qrItem.appendChild(qrCanvas);

        // Add a clickable link below the QR code
        const qrLink = document.createElement('a');
        qrLink.href = `${location.origin}/detail?title=${encodeURIComponent(artwork.title)}`; // Link from the JSON
        qrLink.textContent = "Learn More";
        qrLink.target = "_blank"; // Open link in a new tab
        qrItem.appendChild(qrLink);

        // Generate the QR code (encode the URL)
        QRCode.toCanvas(
            qrCanvas,
            `${location.origin}/detail?title=${encodeURIComponent(artwork.title)}`,
            { width: 150 }
        ).catch(error => console.error('QR Code generation failed:', error));

        // Append the QR code item to the container
        qrContainer.appendChild(qrItem);
    });
}

// Fetch JSON and call the generate function
fetch('artworks.json')
    .then(response => response.json())
    .then(data => generateQRCodes(data))
    .catch(error => console.error('Error loading artworks JSON:', error));
