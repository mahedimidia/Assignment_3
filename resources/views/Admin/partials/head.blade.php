<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @stack('title')
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function toggleDropdown(id) {
      const menu = document.getElementById(id);
      menu.classList.toggle('hidden');
    }
  </script>
</head>