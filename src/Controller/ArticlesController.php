<?php

namespace App\Controller;
class ArticlesController extends AppController{
	public function index(){
		$articles = $this->Articles->find('all');
		$this->set(compact('articles'));
	}
	public function view($id){
		$article = $this->Articles->get($id);
		$this->set(compact('article'));
	}
	public function add(){
		$article = $this->Articles->newEntity();
		if($this->request->is('post')){
			$article = $this->Articles->patchEntity($article,$this->request->data);
			if($this->Articles->save($article)){
				$this->Flash->success(__('Saved Successfully'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to Save'));
		}
		$this->set('article',$article);
	}
	public function edit($id){
		$article = $this->Articles->get($id);
		if($this->request->is(['post','put'])){
			$article = $this->Articles->patchEntity($article,$this->request->data);
			if($this->Articles->save($article)){
				$this->Flash->success(__('Updated Successfully'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to Save'));
		}
		$this->set('article',$article);
	}
	public function delete($id){
		$article = $this->Articles->get($id);
		if($this->Articles->delete($article)){
			$this->Flash->success(__('Deleted Successfully'));
		} else {
			$this->Flash->error(__('Unable to Delete'));
		}
		return $this->redirect(['action' => 'index']);
	}
}