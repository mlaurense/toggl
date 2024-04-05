<?php namespace Ixudra\Toggl\Traits;


use stdClass;

trait ClientTrait {

    /**
     * Get clients visible to user
     *
     * @return  stdClass
     */
    public function clients()
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/clients' );
    }

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function createClient(array $data = array())
    {
        $data[ 'wid' ] = (int)$this->workspaceId;

        return $this->sendPostMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/clients', $data );
    }

    /**
     * Summary report returns the aggregated time entries data
     *
     * @param   integer     $id         ID of the client
     * @return  stdClass
     */
    public function client($id)
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/clients/'. $id );
    }

    /**
     * Update a client
     *
     * @param   integer     $id         ID of the client
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function updateClient($id, array $data = array())
    {
        $data[ 'wid' ] = (int)$this->workspaceId;

        return $this->sendPutMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/clients/'. $id, $data );
    }

    /**
     * Delete a client
     *
     * @param   integer     $id         ID of the client
     * @return  stdClass
     */
    public function deleteClient($id)
    {
        return $this->sendDeleteMessage( $this->baseUrl .'/api/v9/workspaces/'.$this->workspaceId.'/clients/'. $id );
    }

    /**
     * Get client projects
     *
     * @param   integer     $id         ID of the project
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function clientProjects($id, array $data = array())
    {
        return $this->sendGetMessage( $this->baseUrl .'/api/v8/clients/'. $id .'/projects', $data );
    }

}
