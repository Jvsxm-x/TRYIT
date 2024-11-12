<?php
// src/Controller/AdminController.php
namespace App\Controller\Admin;

use App\Entity\Users;
use App\Entity\Coachs;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gym Management Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        // Create menu items for your entities
        yield MenuItem::linkToCrud('Users', 'fa fa-users', Users::class);
        yield MenuItem::linkToCrud('Coachs', 'fa fa-chalkboard-teacher', Coachs::class);
    }
}
