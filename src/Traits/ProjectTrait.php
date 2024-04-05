<?php namespace Ixudra\Toggl\Traits;


use stdClass;

trait ProjectTrait {

    /**
     * Get projects visible to user
     *
     * @return  stdClass
     */
    public function projects()
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects' );
    }

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function createProject(array $data = array())
    {
        return $this->sendPostMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects', $data );
    }

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   integer     $id         ID of the project
     * @return  stdClass
     */
    public function project($id)
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'. $id );
    }

    /**
     * Update a project
     *
     * @param   integer     $id         ID of the project
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function updateProject($id, array $data = array())
    {
        return $this->sendPutMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'. $id, $data );
    }

    /**
     * Delete a project
     *
     * @param   integer     $id         ID of the project
     * @return  stdClass
     */
    public function deleteProject($id)
    {
        return $this->sendDeleteMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'. $id );
    }

    /**
     * Get project users
     *
     * @param   integer     $id         ID of the project
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function projectUsers($id, array $data = array())
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'. $id .'/project_users', $data );
    }

    /**
     * Get project tasks
     *
     * @param   integer     $id         ID of the project
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function projectTasks($id, array $data = array())
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/projects/'. $id .'/tasks', $data );
    }

}
