<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Core | Bandas de 1 Álbum</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
  <style>
    :root {
      --color-primary: #292556;
      --color-primary-rgb: 41, 37, 86;
      --color-primary-shade: #24214c;
      --color-primary-tint: #3e3b67;
      --color-secondary: #00c5df;
      --color-tertiary: #e8d5b5;
      --color-light: #fff;
      --color-dark: #000;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body, .main { height: 100%; }
    html { font-size: 16px; }
    body { display: flex; align-items: center; justify-content: center; padding-top: 5rem; background-color: var(--color-primary-shade); font-family: 'Montserrat', sans-serif; font-weight: 400; }
    .main { display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; }
    .wrapper { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 2rem; width: calc(100% - 1.5rem); max-width: 40rem; border-radius: 0.25rem; padding: 2rem 3rem; background-color: var(--color-primary-tint); box-shadow: 0 0 2rem rgba(0,0,0,.1); }
    .actions { width: 100%; display: flex; flex-direction: column; gap: 1rem; }
    .footer { display: flex; width: 100%; margin-top: auto; padding: 1rem; }
    .footer-badge { display: flex; align-items: center; justify-content: center; width: 3rem; height: 3rem; border-radius: 50%; background-color: var(--color-dark); text-decoration: none; transition: 0.2s transform ease; }
    .footer-badge:hover { transform: translateY(-4px); }
    .footer-badge svg { width: 1.5rem; }
    .button { display: inline-flex; align-items: center; justify-content: center; gap: .5rem; width: 100%; padding: 0.75rem 1rem; border-radius: 0.25rem; text-decoration: none;  font-size: .875rem;  font-weight: 500; }
    .button svg { height: 1rem; }
    .button:hover { opacity: 0.8; }
    .button.-primary { background-color: var(--color-primary-shade); color: var(--color-light); }
    .button.-tertiary { background-color: var(--color-tertiary); color: var(--color-primary-shade); }
  </style>
</head>
<body>