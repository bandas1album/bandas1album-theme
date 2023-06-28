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
  <main class="main">
    <section class="wrapper">
      <img data-skip-lazy src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" width="160" height="51" alt="Bandas 1 Álbum">

      <div class="actions">
        <a href="<?php echo admin_url(); ?>" class="button -primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none"><path fill="#fff" d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10 10-4.49 10-10S17.51 2 12 2ZM3.01 12c0-1.3.28-2.54.78-3.66l4.29 11.75c-3-1.46-5.07-4.53-5.07-8.09ZM12 20.99c-.88 0-1.73-.13-2.54-.37l2.7-7.84 2.76 7.57c.02.04.04.09.06.12-.93.34-1.93.52-2.98.52Zm1.24-13.21c.54-.03 1.03-.09 1.03-.09.48-.06.43-.77-.06-.74 0 0-1.46.11-2.4.11-.88 0-2.37-.11-2.37-.11-.48-.02-.54.72-.05.75 0 0 .46.06.94.09l1.4 3.84-1.97 5.9-3.27-9.75c.54-.02 1.03-.08 1.03-.08.48-.06.43-.77-.06-.74 0 0-1.46.11-2.4.11-.17 0-.37 0-.58-.01C6.1 4.62 8.86 3.01 12 3.01c2.34 0 4.47.89 6.07 2.36-.04 0-.08-.01-.12-.01-.88 0-1.51.77-1.51 1.6 0 .74.43 1.37.88 2.11.34.6.74 1.37.74 2.48 0 .77-.3 1.66-.68 2.91l-.9 3-3.24-9.68Zm6.65-.09a8.988 8.988 0 0 1-3.37 12.08l2.75-7.94c.51-1.28.68-2.31.68-3.22 0-.33-.02-.64-.06-.92Z"/></svg>
          <span>Login no painel</span>
        </a>
        <a href="https://bandas1album.com.br/" class="button -tertiary" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 80" fill="none"><g fill="#24214c" clip-path="url(#a)"><path fill-rule="evenodd" d="M10.57 51.588a1.733 1.733 0 0 1-3.45-.332l1.697.155c-1.697-.155-1.696-.156-1.696-.156v-.006l.001-.009.002-.02a3.384 3.384 0 0 1 .03-.221c.02-.135.054-.317.105-.546.102-.458.277-1.099.574-1.91.593-1.623 1.672-3.917 3.627-6.774 1.902-2.78 3.239-4.492 4.118-5.524.44-.517.77-.868 1.001-1.1a7.746 7.746 0 0 1 .402-.373l.014-.01.006-.006.003-.002.001-.001s.002-.002 1.084 1.352l-1.082-1.353a1.733 1.733 0 0 1 2.187 2.688l-.012.01a4.235 4.235 0 0 0-.152.146c-.156.157-.423.438-.813.896-.781.917-2.044 2.527-3.897 5.235-1.8 2.631-2.743 4.67-3.232 6.007a11.92 11.92 0 0 0-.446 1.475 5.162 5.162 0 0 0-.071.38Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M39.034 22.46c-3.445-.423-7.084-.19-10.72.685l-.562 3.031a1.734 1.734 0 0 1-.543 2.935l-.138.743 1.283 1.631a1.156 1.156 0 0 1 .083 2.264l-.013.004-.043.012-.05.015c-.092.029-.241.08-.444.16-.39.156-.979.426-1.734.872l-1.406 7.593c3.7-2.434 8.058-2.903 11.333-1.317l2.954-18.628Zm-1.947 19.205 3.021-19.051c5.14.845 9.791 3.186 13.277 7.057 9.607 10.67 6.727 28.924-6.431 40.772-13.16 11.848-31.614 12.804-41.22 2.134-9.607-10.669-6.728-28.923 6.43-40.771 4.558-4.103 9.75-6.9 14.99-8.36l-.427 2.308a1.737 1.737 0 0 0-.304.007l.113 1.023-.115-1.023h-.003l-.005.001-.01.001-.029.004a6.118 6.118 0 0 0-.325.054c-.202.038-.48.1-.828.197-.695.195-1.667.53-2.864 1.1-2.397 1.144-5.678 3.227-9.451 7-2.276 2.276-4.337 5.44-5.8 7.952a69.889 69.889 0 0 0-2.25 4.195c-.057.115-.1.206-.13.268l-.035.072-.01.02-.003.008a1.734 1.734 0 0 0 3.138 1.473l.001-.003.007-.014.028-.06.117-.242a66.458 66.458 0 0 1 2.133-3.974c1.423-2.443 3.304-5.293 5.255-7.244l.162-.162 2.13 2.709c-1.45 1.635-2.79 3.723-3.756 5.375a55.317 55.317 0 0 0-1.59 2.926l-.024.046-.006.013-.002.005 1.037.507-1.037-.507a1.155 1.155 0 1 0 2.075 1.015l.002-.002.004-.01.02-.039.079-.158a53.073 53.073 0 0 1 1.437-2.63c.953-1.63 2.221-3.591 3.538-5.062 2.129-2.377 4-3.947 5.474-4.976l-1.43 7.728c-.172.141-.342.287-.51.437-4.999 4.495-6.098 11.425-2.453 15.479 3.644 4.053 10.651 3.696 15.65-.799 5-4.494 6.1-11.424 2.455-15.478-.459-.51-.97-.95-1.525-1.321ZM4.678 46.633l1.569.736-1.569-.736Zm23.326-14.715.164.708-.164-.708Zm19.241 16.536v.001l-.001.01-.003.017-.004.027a12.377 12.377 0 0 1-.199.93 19.955 19.955 0 0 1-.912 2.705c-.933 2.255-2.612 5.297-5.586 8.416-3.026 2.847-5.523 4.4-7.247 5.24-.863.421-1.534.664-1.981.8a6.739 6.739 0 0 1-.62.158l-.025.004h-.003a.543.543 0 0 0 .154 1.074l-.076-.537.077.537h.003l.004-.001.014-.002.017-.003.028-.005a7.796 7.796 0 0 0 .742-.187 14.704 14.704 0 0 0 2.141-.862c1.83-.892 4.42-2.513 7.526-5.436l.006-.005a.555.555 0 0 0 .015-.016c3.085-3.232 4.834-6.396 5.814-8.76.489-1.181.786-2.163.96-2.854a13.444 13.444 0 0 0 .22-1.026l.004-.026.004-.033.003-.017v-.007l-.537-.071.538.07a.542.542 0 0 0-1.076-.141Zm5.811-.467a.542.542 0 0 0-.611.463v.003l-.003.015a5.646 5.646 0 0 1-.058.33c-.045.234-.12.582-.233 1.026a27.257 27.257 0 0 1-1.25 3.683c-1.27 3.044-3.528 7.082-7.483 11.037-3.599 3.6-6.67 5.528-8.821 6.555-1.077.513-1.925.802-2.497.962a8.06 8.06 0 0 1-.801.182 3.61 3.61 0 0 1-.035.005h-.005a.542.542 0 0 0 .12 1.078l-.06-.539.061.54.003-.001h.005l.017-.003.021-.003.034-.005c.047-.007.114-.018.2-.034a9.17 9.17 0 0 0 .732-.175c.63-.177 1.538-.487 2.672-1.028 2.269-1.083 5.44-3.085 9.121-6.767 4.071-4.072 6.403-8.235 7.717-11.386a28.348 28.348 0 0 0 1.3-3.831 18.653 18.653 0 0 0 .3-1.385l.013-.079.003-.022.001-.006V48.6l-.537-.074.538.074a.542.542 0 0 0-.464-.611Z" clip-rule="evenodd"/><path d="M35.028 47.722c-.452 2.719-.63 4.745-1.536 5.973-.907 1.228-2.15 1.762-4.08 1.762-1.073 0-3.107 0-4.598-1.49-1.492-1.492-1.492-3.39-1.052-6.245l6.509-35.147c0-.456-.035-.912-.105-1.368-.07-.49-.198-.912-.384-1.263a2.553 2.553 0 0 0-.767-.947c-.326-.245-.744-.368-1.256-.368-.465 0-.918.14-1.36.42a8.12 8.12 0 0 0-1.22.948c-.42.386-.838.824-1.256 1.315l-.872-1.736c2.86-3.402 5.453-5.84 7.778-7.314C33.177.754 35.374 0 37.42 0c1.209 0 2.197.544 2.964 1.631.768 1.052 1.151 2.736 1.151 5.051l-6.508 41.04Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h59.119v80H0z"/></clipPath></defs></svg>
          <span>Acessar a aplicação</span>
        </a>
      </div>
    </section>

    <footer class="footer">
      <a class="footer-badge" href="https://kevinoliveira.com.br/" target="_blank" title="Feito com amor por Kevin Oliveira" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 21" fill="none"><g fill="#fff" clip-path="url(#a)"><path d="M18.514 10.64 9.257 20.778H0l9.257-10.14L0 .5h9.257l9.257 10.14ZM36 .5h-9.257v6.084h3.086v8.111h-3.086v6.084H36V.5Z"/><path d="M14.4.5h9.257v6.084h-3.086v8.111h3.086v6.084H14.4V.5Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 .5h36v20.279H0z"/></clipPath></defs></svg>
      </a>
    </footer>
  </main>

</body>
</html>