<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Monedas Controller
 *
 * @property \App\Model\Table\MonedasTable $Monedas
 */
class MonedasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Monedas->find();

        $search = $this->request->getQuery('search');
        if ($search) {
            $query->where(['OR' => [
                'Monedas.nombre ILIKE' => '%' . $search . '%',
                'Monedas.codigo ILIKE' => '%' . $search . '%',
                'Monedas.pais ILIKE' => '%' . $search . '%',
            ]]);
        }

        $activa = $this->request->getQuery('activa');
        if ($activa !== null && $activa !== '') {
            $query->where(['Monedas.activa' => $activa == '1']);
        }

        $fecha = $this->request->getQuery('fecha');
        if ($fecha) {
            $query->where(['DATE(Monedas.created)' => $fecha]);
        }

        $monedas = $this->paginate($query);

        $this->set(compact('monedas'));
    }

    /**
     * View method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $moneda = $this->Monedas->get($id, contain: []);
        $this->set(compact('moneda'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $moneda = $this->Monedas->newEmptyEntity();
        if ($this->request->is('post')) {
            $moneda = $this->Monedas->patchEntity($moneda, $this->request->getData());
            if ($this->Monedas->save($moneda)) {
                $this->Flash->success(__('The moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('moneda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $moneda = $this->Monedas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moneda = $this->Monedas->patchEntity($moneda, $this->request->getData());
            if ($this->Monedas->save($moneda)) {
                $this->Flash->success(__('The moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('moneda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moneda = $this->Monedas->get($id);
        if ($this->Monedas->delete($moneda)) {
            $this->Flash->success(__('The moneda has been deleted.'));
        } else {
            $this->Flash->error(__('The moneda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
