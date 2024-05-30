<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function index()
    {
        $user_id = session('user_id');
        $client = new Client();

        try {
            $response = $client->request('GET', 'https://al-maher.net/api/get_myCourse.php', [
                'query' => [
                    'tid' => $user_id,
                    'time' => 1693943375
                ]
            ]);

            $courses = json_decode($response->getBody()->getContents(), true);
            return view('pages.courses.index', ['courses' => $courses, 'title' => 'الدورات']);

        } catch (\Exception $e) {
            // Handle exception if the request fails
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function fetchCourseData($courseId)
    {
        $endpoint = 'https://al-maher.net/api/get_level1_data_ids.php?tid=';

        $endpoint .= $courseId . '&time=1693943375';

        $client = new Client();
        $response = $client->request('GET', $endpoint);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $lessons = array_map(function($item) {
            return Lesson::fromArray($item);
        }, $jsonResponse['rows']);

        return view('pages.courses.course-data', ['courseData' => $lessons,'title'=>'الدروس']);
    }

    public function fetchLessonData($lessonId)
    {
        $endpoint = 'https://al-maher.net/api/get_level1_data_ids.php?tid=';

        $endpoint .= $lessonId . '&time=1693943375';

        $client = new Client();
        $response = $client->request('GET', $endpoint);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $lessons = array_map(function($item) {
            return Lesson::fromArray($item);
        }, $jsonResponse['rows']);

        return view('pages.courses.lesson-data', ['lessonData' => $lessons,'title'=>'محتوي الدروس']);
    }

    public function fetchLessonSubjects($lessonId)
    {
        $endpoint = 'https://al-maher.net/api/get_lesson.php?tid=';

        $endpoint .= $lessonId . '&time=1693943375';

        $client = new Client();
        $response = $client->request('GET', $endpoint);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $lessons = array_map(function($item) {
            return Lesson::fromArray($item);
        }, $jsonResponse['rows']);

        return view('pages.courses.lesson-subjects', ['lessonData' => $lessons,'title'=>'المواضيع']);
    }

    public function fetchSubjectVideo($tid)
    {
        $endpoint = 'https://al-maher.net/api/get_lesson_des.php?tid=';

        $endpoint .= $tid . '&time=1693943375';

        $client = new Client();
        $response = $client->request('GET', $endpoint);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        if (isset($jsonResponse['rows']) && is_array($jsonResponse['rows']) && !empty($jsonResponse['rows'])) {
            $lessonVideo = new LessonVideo($jsonResponse['rows'][0]);
            return view('pages.courses.video', ['lessonVideo' => $lessonVideo,'title'=>'الفيديو']);
        } else {
            throw new \Exception('Failed to load lesson video');
        }
    }

}

class Lesson {
    public $id;
    public $name;
    public $external_link;

    public function __construct($id, $name, $external_link = null) {
        $this->id = $id;
        $this->name = $name;
        $this->external_link = $external_link;
    }

    public static function fromArray($array) {
        return new Lesson($array['tax_tid'], $array['tax_name'], $array['external_link'] ?? null);
    }

    public function __toString() {
        return 'Lesson{id: ' . $this->id . ', name: ' . $this->name . '}';
    }
}
class LessonVideo {
    public $tax_name;
    public $tax_tid;
    public $youtub;
    public $dyntub;
    public $viemo;
    public $youTubEnc;

    public function __construct($array) {
        $this->tax_name = $array['tax_name'] ?? '';
        $this->tax_tid = $array['tax_tid'] ?? '';
        $this->youtub = $array['youtub'] ?? '';
        $this->dyntub = $array['dyntub'] ?? '';
        $this->viemo = $array['viemo'] ?? '';
        $this->youTubEnc = $array['youTubEnc'] ?? '';
    }
}
