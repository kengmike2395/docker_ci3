<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agilab</title>
    <script src="<?= base_url('assets/js/tailwind.js'); ?>"></script>
</head>

<body>
    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <?= $side_nav_view ?? '' ?>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 min-h-screen md:ml-0">

            <!-- Header -->
            <?= $title_view ?? '' ?>
            

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <?= $page_content ?? '' ?>
            </main>

            <!-- Footer -->
            <?= $footer_view ?? '' ?>
            

        </div>
    </div>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });

        closeSidebar.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>
    
</body>

</html>