<?php

namespace PM\TPBundle\Controller;

use PM\TPBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
		$em = $this->getDoctrine()->getManager();
		$listArticles =$em->getRepository('PMTPBundle:Article')->findAll();
        return $this->render('PMTPBundle:Default:index.html.twig', array('listArticles' => $listArticles));
    }
	
	public function viewAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('PMTPBundle:Article')->find($id);

		if (null == $article) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}
		
        return $this->render('PMTPBundle:Default:view.html.twig', array('article' => $article));
    }
	
	public function addAction(Request $request)
    {
     	$article = new Article();

		$formBuilder = $this->createFormBuilder($article);
		$formBuilder->add('date', DateType::class)
					->add('title', TextType::class)
					->add('content', TextareaType::class)
					->add('author', TextType::class)
					->add('save', SubmitType::class, array('label' => 'Publier l\'article'))
					;
		
		$form = $formBuilder->getForm();
		$form->handleRequest($request);

		if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      		return $this->redirect($this->generateUrl('pm_tp_view', array('id' => $article->getId())));
		}

		return $this->render('PMTPBundle:Default:add.html.twig', array(
		'form' => $form->createView(),
		));
    }
	
	public function editAction(Request $request, $id)
    {
		$article = $this->getDoctrine()->getManager()->getRepository('PMTPBundle:Article')->find($id);
		
		$formBuilder = $this->createFormBuilder($article);
		$formBuilder->add('date', DateType::class)
					->add('title', TextType::class)
					->add('content', TextareaType::class)
					->add('author', TextType::class)
					->add('save', SubmitType::class, array('label' => 'Publier l\'article'))
					;
		
		$form = $formBuilder->getForm();
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			$em->flush();
			
      		return $this->redirect($this->generateUrl('pm_tp_view', array('id' => $article->getId())));
		}

		return $this->render('PMTPBundle:Default:edit.html.twig', array(
		'form' => $form->createView(), 'id' => $article->getId()
		));
    }
	
	public function deleteAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('PMTPBundle:Article')->find($id);
		$em->remove($article);
		$em->flush();
		
		$listArticles = $em->getRepository('PMTPBundle:Article')->findAll();
        return $this->render('PMTPBundle:Default:index.html.twig', array('listArticles' => $listArticles));
    }
}
