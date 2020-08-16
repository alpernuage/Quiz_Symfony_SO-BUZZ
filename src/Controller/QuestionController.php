<?php

namespace App\Controller;

use App\Form\AddQuestionType;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question", name="index", methods={"GET"})
     */
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/index.html.twig', [
            'questions' => $questionRepository->findAll()
        ]);
    }

    /**
     *
     * @Route("/new/question", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response{
        $question = new Question();
        $form = $this->createForm(AddQuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            if ($form->isValid()){
                try{
                    $addQuestionType = $this->getDoctrine()
                        ->getRepository(AddQuestionType::class)
                        ->findOneBy([
                            'name' => 'Question'
                        ]);
                    $question->setAddQuestionType($addQuestionType);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($question);
                    $entityManager->flush();

                    $this->addFlash('success', 'Question enregistrée avec succès');

                    return $this->redirectToRoute('question_index');
                } catch (\Exception $ex){
                    $this->addFlash('warning', 'Une erreur s\'est produite lors de l\'enregistrement');
                    throw $ex;
                }
            } else{
                $this->addFlash('warning', 'Certaines informations saisies ne sont pas correctes');
            }
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'clickedButton' => $question->getClickedButton()
        ]);
    }

}

