<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;
use illuminate\Database\QueryException;

use function Ramsey\Uuid\v1;

class AdminServiceController extends Controller
{
    public function adminService()
    {
        $services = Service::all();

        return view('admin.service', [
            'services' => $services
        ]);
    }

    public function createServiceform()
    {
        $services = Service::all();
        return view('admin.createservice', [
            'services' => $services
        ]);
    }

    public function createService(ServerRequestInterface $request)
    {
        try{
            $data = $request->getParsedBody();
            $services = Service::create($data);

            return redirect()->route('admin-service')
                ->with('status', "Room {$services->id} was created");
        }
        catch(QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function updateService($services)
    {
        $services = Service::where('id', $services)->first();

        return view('admin.updateservice', [
            'services' => $services
        ]);
    }

    public function update(ServerRequestInterface $request, $services)
    {
        try {
        $data = $request->getParsedBody();
        $services = Service::where('id', $services)->first();
        $services->update($data);

        return redirect()->route('admin-service', ['id' => $services['id']])
            ->with('status', "Room {$services->id} was updated");
        }

        catch(QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function delete($services)
    {
        $services = Service::where('id', $services)->first();
        $services->delete();

        return redirect()->route('admin-service')
            ->with('status', "Room {$services->id} was deleted");
    }


}
