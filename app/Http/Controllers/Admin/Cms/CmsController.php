<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\Cms\CmsInterface;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    private $cms;

    public function __construct( CmsInterface $cmsInterface) {
        $this->cms = $cmsInterface;
    }
    public function cmsAboutus(){
        $data['aboutUscms'] = $this->cms->getAboutCms();
        return view('Admin.Cms.aboutUsIndex', $data);
    }

    public function cmsServices() {
        $data['services'] = $this->cms->getServiceCms();
        return view('Admin.Cms.serviceIndex', $data);
    }

    public function showEnquiries(){
        $data['enquiries'] = $this->cms->getEnquiries();
        return view('Admin.Cms.enquiry', $data);
    }

    public function cmsCreate() {
        return view('Admin.Cms.Create');
    }

    public function cmsstore( Request $request ) {
        $request->validate([
            'title' => 'required|string',
            'short_desc' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        $data = $request->only('title', 'short_desc', 'description', 'image');
        if($this->cms->storeCms($data)){
            return back()->with('msg', 'Cms created');
        }else{
            return back()->with('msg', 'Some error occur!');
        }
    }

    public function showCms($slug) {
        $data['cms'] = $this->cms->getCms($slug);
        return view('Admin.Cms.edit', $data);
    }

    public function cmsEdit(Request $request, $slug) {
        $request->validate([
            'title' => 'required|string',
            'short_desc' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        $data = $request->only('title', 'short_desc', 'description', 'image');

        if($this->cms->updateCms($data, $slug)){
            return redirect()->route('cms.aboutus')->with('msg', 'Cms Updated');
        }else{
            return back()->with('msg', 'No Changes!');
        }
    }

    public function deleteEnquiries($id){
        if($this->cms->deleteEnquiry($id)){
            return back()->with('msg', 'Enquery deleted successfully');
        }else{
            return back()->with('msg', 'some error occur, try again');
        }
    }

}
