<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Entity\Archives;
use App\Form\ArchivesType;
use App\Repository\ArchivesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/archives")
 */
class ArchivesController extends AbstractController
{
    /**
     * @Route("/", name="archives_index", methods={"GET"})
     */
    public function index(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/index.html.twig', [
            'archives' => $archivesRepository->findAll(),
            'pageTitle' => 'Archives', 
        ]);
    }

    /**
     * @Route("/packages", name="packages", methods={"GET"})
     */
    public function showPackages(ArchivesRepository $archivesRepository): Response
    {
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('archives/packages/show.html.twig', [
            'packages' => $archivesRepository->findPackages(),
            'pageTitle' => 'Packages', 
            'search_form' => $searchForm->createView(),
        ]);
    }

       /**
     * @Route("/designpatterns", name="design_patterns", methods={"GET"})
     */
    public function showDesignPatterns(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/design_patterns/show.html.twig', [
            'designs' => $archivesRepository->findDesingPatterns(),
            'pageTitle' => 'Design Patterns', 
        ]);
    }

       /**
     * @Route("/modules", name="modules", methods={"GET"})
     */
    public function showModules(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/modules/show.html.twig', [
            'modules' => $archivesRepository->findModules(),
            'pageTitle' => 'Modules', 
        ]);
    }

       /**
     * @Route("/extensions", name="extensions", methods={"GET"})
     */
    public function showExtensions(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/extensions/show.html.twig', [
            'extensions' => $archivesRepository->findExtensions(),
            'pageTitle' => 'Extensions', 
        ]);
    }

       /**
     * @Route("/library", name="library", methods={"GET"})
     */
    public function showLibrary(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/library/show.html.twig', [
            'libraries' => $archivesRepository->findLibrary(),
            'pageTitle' => 'Library', 
        ]);
    }

       /**
     * @Route("/services", name="services", methods={"GET"})
     */
    public function showServices(ArchivesRepository $archivesRepository): Response
    {
        return $this->render('archives/services/show.html.twig', [
            'services' => $archivesRepository->findServices(),
            'pageTitle' => 'Services', 
        ]);
    }

    /**
     * @Route("/new", name="archives_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $archive = new Archives();
        $form = $this->createForm(ArchivesType::class, $archive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($archive);
            $entityManager->flush();

            return $this->redirectToRoute('archives_index');
        }

        return $this->render('archives/new.html.twig', [
            'archive' => $archive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="archives_show", methods={"GET"})
     */
    public function show(Archives $archive): Response
    {
        return $this->render('archives/show.html.twig', [
            'archive' => $archive,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="archives_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Archives $archive): Response
    {
        $form = $this->createForm(ArchivesType::class, $archive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('archives_index');
        }

        return $this->render('archives/edit.html.twig', [
            'archive' => $archive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="archives_delete", methods={"POST"})
     */
    public function delete(Request $request, Archives $archive): Response
    {
        if ($this->isCsrfTokenValid('delete'.$archive->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($archive);
            $entityManager->flush();
        }

        return $this->redirectToRoute('archives_index');
    }
}
