<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNewsSaveRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('admin.news.index', ['news' => $news]);
    }

    public function create(Category $category)
    {
        return view(
            "admin.news.create",
            [
                'model' => new News(),
                'categories' => $category->getList(),
            ]
        );
    }

    public function update(Category $category, News $news)
    {
        return view(
            "admin.news.create",
            [
                'model' => $news,
                'categories' => $category->getList()
            ]
        );
    }

    public function delete($id)
    {
        News::destroy([$id]);
        return redirect()->route("admin::news::index");
    }

    public function save(AdminNewsSaveRequest $request)
    {
        // dd($request);

        $id = $request->post('id');

        // dd($id);

        //$model = News::findOrNew($id);
        $model = $id ? News::find($id) : new News();
        $model->fill($request->all());
        $model->save();
        return redirect()->route("admin::news::index", ['news' => $model->id])
            ->with('success', "Данные сохранены");
    }
}