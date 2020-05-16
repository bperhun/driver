<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;
use application\models\Admin;

class MainController extends Controller {

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Головна сторінка', $vars);
	}

	public function driverAction() {
		$pagination = new Pagination($this->route, $this->model->driversCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->driversList($this->route),
		];
		$this->view->render('Водії', $vars);
	}

	public function aboutAction() {
		$this->view->render('Про Нас');
	}

	public function contactAction() {
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			mail('titef@p33.org', 'Сообщение из блога', $_POST['name'].'|'.$_POST['email'].'|'.$_POST['text']);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		}
		$this->view->render('Контакти');
	}

	public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост', $vars);
	}

}