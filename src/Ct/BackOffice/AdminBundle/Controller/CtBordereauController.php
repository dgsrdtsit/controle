<?php

namespace Ct\BackOffice\AdminBundle\Controller;

use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Form\CtBordereauType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Ct\Service\MetierManagerBundle\Entity\CtBordereau;

/**
 * Class CtBordereauController
 *
 * @package Ct\BackOffice\AdminBundle\Controller
 */
class CtBordereauController extends Controller
{
    /**
     * Afficher tout les bordereau
     * @return Render page
     */
    public function indexAction()
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_BORDEREAU);
        $_ctr_manager = $this->get(ServiceName::SRV_METIER_CENTRE);

        // Récupérer tout les imprimés tech
        $_bl = $_bl_manager->getAllCtBordereauByOrder(array('id' => 'DESC'));
        return $this->render('AdminBundle:CtBordereau:index.html.twig', array(
            'its_in_bl' => $_bl,
        ));
    }

    /**
     * Affichage page modification bordereau
     * @param CtBordereau $_bordereau
     * @return Render page
     */
    public function editAction(CtBordereau $_bordereau)
    {
        if (!$_bordereau) {
            throw $this->createNotFoundException('Unable to find bordereau entity.');
        }

        $_edit_form = $this->createEditForm($_bordereau);

        return $this->render('AdminBundle:Ctbordereau:edit.html.twig', array(
            'bordereau' => $_bordereau,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Création bordereau
     * @param Request $_request requête
     * @return Render page
     */
    public function newAction(Request $_request)
    {
        // Récupérer manager
        $_bl_manager= $this->get(ServiceName::SRV_METIER_BORDEREAU);

        $_bordereau = new CtBordereau();
        $_form      = $this->createCreateForm($_bordereau);
        $_form->handleRequest($_request);

        if ($_form->isSubmitted() && $_form->isValid()) {
            // Enregistrement bordreau
            $_bl_manager->saveCtBordereau($_bordereau, 'new');
            $_bl_manager->setFlash('success', "Imprimé technique ajouté dans bordereau");
            return $this->redirect($this->generateUrl('bordereau_index'));
        }

        return $this->render('AdminBundle:CtBordereau:add.html.twig', array(
            'bordereau' => $_bordereau,
            'form'       => $_form->createView()
        ));
    }

    /**
     * Modification bordereau
     * @param Request $_request requête
     * @param CtImprimeTech $_bordereau
     * @return Render page
     */
    public function updateAction(Request $_request, CtBordereau $_bordereau)
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_BORDEREAU);

        if (!$_bl_manager) {
            throw $this->createNotFoundException('Unable to find bordereau entity.');
        }

        $_edit_form = $this->createEditForm($_bordereau);
        $_edit_form->handleRequest($_request);

        if ($_edit_form->isValid()) {
            $_bl_manager->saveCtBordereau($_bordereau, 'update');
            $_bl_manager->setFlash('success', "Imprimé technique modifié dans bordereau");
            return $this->redirect($this->generateUrl('bordereau_index'));
        }

        return $this->render('AdminBundle:CtBordereau:edit.html.twig', array(
            'bordereau' => $_bordereau,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Création formulaire d'édition bordereau
     * @param CtBordereau $_bordereau The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CtBordereau $_bordereau)
    {
        $_form = $this->createForm(CtBordereauType::class, $_bordereau, array(
            'action' => $this->generateUrl('bordereau_new'),
            'method' => 'POST'
        ));

        return $_form;
    }

    /**
     * Création formulaire de création bordereau
     * @param CtBordereau $_bordereau The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(CtBordereau $_bordereau)
    {
        $_form = $this->createForm(CtBordereauType::class, $_bordereau, array(
            'action' => $this->generateUrl('bordereau_update', array('id' => $_bordereau->getId())),
            'method' => 'PUT',
        ));

        return $_form;
    }

    /**
     * Suppression d'un imprimé technique dans un bordreau
     * @param Request $_request requête
     * @param CtBordereau $_bordereau
     * @return Redirect redirection
     */
    public function deleteAction(Request $_request, CtBordereau $_bordereau)
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_BORDEREAU);

        $_form = $this->createDeleteForm($_bordereau);
        $_form->handleRequest($_request);

        if ($_request->isMethod('GET') || ($_form->isSubmitted() && $_form->isValid())) {
            // Suppression carossérie
            $_bl_manager->deleteCtBordereau($_bordereau);

            $_bl_manager->setFlash('success', 'Imprimé technique supprimé du bordereau.');
        }

        return $this->redirectToRoute('bordreau_index');
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtBordereau $_bordereau The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtBordereau $_bordereau)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bordereau_delete', array('id' => $_bordereau->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Suppression par groupe séléctionnée
     * @param Request $_request
     * @return Redirect liste imprimé tech
     */
    public function deleteGroupAction(Request $_request)
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_BORDEREAU);

        if ($_request->request->get('_group_delete') !== null) {
            $_ids = $_request->request->get('delete');
            $_bl_manager->deleteGroupCtBordereau($_ids);
        }

        $_bl_manager->setFlash('success', 'Eléments sélectionnés supprimés');

        return $this->redirect($this->generateUrl('bordereau_index'));
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtBordereau $_bordereau The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSearchForm(CtBordereau $_bordereau)
    {
        $_form = $this->createForm(CtBordereauType::class, $_bordereau, array(
            'action' => $this->generateUrl('bordereau_search', array()),
            'method' => 'POST',
        ));

        return $_form;
    }

    /**
     * Recherche bordereau pour un centre
     * @param Request $_request requête
     * @return Render page
     */
    public function searchAction(Request $_request)
    {
        $_bl_manager = $this->get(ServiceName::SRV_METIER_BORDEREAU);
        // Chargement de formulaire
        $_bordereau = new CtBordereau();
        $_search_form = $this->createSearchForm($_bordereau);
        $_search_form->handleRequest($_request);
        // Initilisation des listes
        $_list_in_bl = "";

        if ($_request->getMethod() === 'POST' ) {
            // Récupération données formulaires
            $_data_forms   = $_request->request->all();
            $_bl_numero = isset($_data_forms['blNumero']) ? $_data_forms['blNumero'] : '';
            $_ct_centre_id = isset($_data_forms['ctCentre']) ? $_data_forms['ctCentre'] : '';

            // Recherche par numéro de série
            $_list_in_bl     = $_bl_manager->getListInBordereau($_ct_centre_id, $_bl_numero);
        }

        return $this->render('AdminBundle:CtBordereau:search.html.twig', array(
            'liste_in_bl' => $_list_in_bl,
            'search_form' => $_search_form->createView()
        ));
    }
}
