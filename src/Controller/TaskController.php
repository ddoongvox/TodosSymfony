<?php

namespace App\Controller;

use App\Entity\Task;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends Controller {
    /**
     * @Route("/task", name="task_list")
     */
    public function taskList(Request $request) {
        $taskList = $this->getDoctrine()
            ->getRepository(Task::class)
            ->findAll();

        return $this->render("task/index.html.twig", [
            'taskList' => $taskList
        ]);
    }

    /**
     * @Route("/task/create", name="create_task")
     */
    public function createTask(Request $request) {
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class, ['attr' => [
                'class' => 'form-control',
                'style' => 'margin-bottom: 15px'
            ]])
            ->add('priority', ChoiceType::class, [
                'choices' => [
                    'Low' => 'Low',
                    'Normal' => 'Normal',
                    'High' => 'High'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-bottom: 15px'
            ]])
            ->add('due_date', DateTimeType::class, [ 'attr' => [
//                'class' => 'form-control',
                'style' => 'margin-bottom: 15px; display: flex;'
            ]])
            ->add('save', SubmitType::class, [
                'label' => 'Create Task', 'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'margin-bottom: 15px'
            ]])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get data from form
            $name = $form['name']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();
            $now = new\DateTime('now');

            $task->setName($name);
            $task->setPriority($priority);
            $task->setDueDate($due_date);
            $task->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $this->addFlash(
                'notice',
                'Task Create'
            );
            return $this->redirectToRoute('task_list');
        }
        return $this->render("task/create.html.twig", [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/task/update/{id}", name="update_task")
     */
    public function updateTask($id, Request $request) {
        $task = $this->getDoctrine()
            ->getRepository(Task::class)
            ->find($id);

        $task->setName($task->getName());
        $task->setPriority($task->getPriority());
        $task->setDueDate($task->getDueDate());
        //$task->setCreateDate($now);


        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class, ['attr' => [
                'class' => 'form-control',
                'style' => 'margin-bottom: 15px'
            ]])
            ->add('priority', ChoiceType::class, [
                'choices' => [
                    'Low' => 'Low',
                    'Normal' => 'Normal',
                    'High' => 'High'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-bottom: 15px'
                ]])
            ->add('due_date', DateTimeType::class, [ 'attr' => [
//                'class' => 'form-control',
                'style' => 'margin-bottom: 15px; display: flex;'
            ]])
            ->add('save', SubmitType::class, [
                'label' => 'Update Task', 'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'margin-bottom: 15px'
                ]])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get data from form
            $name = $form['name']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();
            $now = new\DateTime('now');

            $em = $this->getDoctrine()->getManager();
            $task = $em
                ->getRepository(Task::class)
                ->find($id);

            $task->setName($name);
            $task->setPriority($priority);
            $task->setDueDate($due_date);
            $task->setCreateDate($now);

            $em->flush();

            $this->addFlash(
                'notice',
                'Task Update'
            );
            return $this->redirectToRoute('task_list');
        }
        return $this->render("task/update.html.twig", [
            'task' => $task,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/task/delete/{id}", name="delete_task")
     */
    public function deleteTask($id) {
        $em = $this->getDoctrine()->getManager();
        $task = $em
            ->getRepository(Task::class)
            ->find($id);

        $em->remove($task);
        $em->flush();
        $this->addFlash(
            'notice',
            'Task Delete'
        );
        return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/task/details/{id}", name="details_task")
     */
    public function detailsTask($id) {
        $task = $this->getDoctrine()
            ->getRepository(Task::class)
            ->find($id);
        return $this->render("task/details.html.twig", [
            'task' => $task
        ]);
    }
}