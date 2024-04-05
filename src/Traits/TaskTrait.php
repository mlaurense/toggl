<?php namespace Ixudra\Toggl\Traits;


use stdClass;

trait TaskTrait {

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function createTask(array $data = array())
    {
        $projectId = $data['project_id'];

        return $this->sendPostMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'.$projectId.'/tasks', $data );
    }

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   integer     $id         ID of the task
     * @return  stdClass
     */
    public function task($id)
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'.$projectId.'/tasks/'. $id );
    }

    /**
     * Update a task
     *
     * @param   integer     $id         ID of the task
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function updateTask($id, array $data = array())
    {
        $data[ 'workspace_id' ] = (int)$this->workspaceId;
        $projectId = $data['project_id'];

        return $this->sendPutMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'.$projectId.'/tasks/'. $id, $data );
    }

    /**
     * Delete a task
     *
     * @param   integer     $id         ID of the task
     * @return  stdClass
     */
    public function deleteTask($id)
    {
        return $this->sendDeleteMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'.$projectId.'tasks/'. $id );
    }

}
