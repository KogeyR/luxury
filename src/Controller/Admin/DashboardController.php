<?php

namespace App\Controller\Admin;

use App\Entity\Application;
use App\Entity\Candidat;
use App\Entity\Category;
use App\Entity\Client;
use App\Entity\Experience;
use App\Entity\Gender;
use App\Entity\Type;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

public function __construct(private AdminUrlGenerator $adminUrlGenerator) {
    
    
}

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
        ->setController(OfferCrudController::class)
        ->generateUrl();

        return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Luxury');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Offer', 'fa-brands fa-buffer');
        yield MenuItem::linkToCrud('Application', 'fa-regular fa-clipboard', Application::class);
        yield MenuItem::linkToCrud('Candidat', 'fa-solid fa-inbox', Candidat::class);
        yield MenuItem::linkToCrud('Client', 'fa-solid fa-list', Client::class);
        yield MenuItem::linkToCrud('Category','fa-solid fa-user-minus', Category::class);
        yield MenuItem::linkToCrud('Experience','fa-solid fa-school', Experience::class);
        yield MenuItem::linkToCrud('Gender','fa-solid fa-person-half-dress', Gender::class);
        yield MenuItem::linkToCrud('Type','fa-solid fa-filter', Type::class);
        yield MenuItem::linkToCrud('user','fa-solid fa-users', User::class);
        
    }
}
