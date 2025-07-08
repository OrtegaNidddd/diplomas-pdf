const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

// Obtener rutas desde la línea de comandos
const htmlPath = process.argv[2];
const pdfPath = process.argv[3];

(async () => {
    const browser = await puppeteer.launch({
        headless: "new",
        args: ['--no-sandbox', '--disable-setuid-sandbox'],
    });

    const page = await browser.newPage();
    const html = fs.readFileSync(htmlPath, 'utf8');
    await page.setContent(html, { waitUntil: 'networkidle0' });

    await page.pdf({
        path: pdfPath,
        format: 'Legal',
        landscape: true,
        printBackground: true,
    });

    await browser.close();
})();
