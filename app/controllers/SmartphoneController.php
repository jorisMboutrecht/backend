<?php

class SmartphoneController extends BaseController
{
    private $smartphoneModel;

    public function __construct()
    {
        $this->smartphoneModel = $this->model('Smartphone');
    }

    public function index($display='none', $message='')
    {

        $result = $this->smartphoneModel->getAllSmartphones();

        // var_dump($result);
        // $data-arrey geeft informatie mee aan de view-pagina
        $data = [
            'title' => 'Overzicht Smartphones',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        // Met de view-method uit de BaseController-class wordt de view aangeroepen
        $this->view('smartphone/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->smartphoneModel->delete($Id);

        header('Refresh:3 ; url=' . URLROOT . '/SmartphoneController/index');

        $this->index('flex', 'Record is verwijderd');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuwe smartphone toevoegen',
            'display' => 'none',
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];

            if(empty(trim($_POST['merk']))) {
                $errors['merk'] = 'Voer een merk in';
            } elseif (strlen($_POST['merk']) > 20) {
                $errors['merk'] = 'Merk mag maximaal 20 tekens bevatten';
            }
            if(empty(trim($_POST['model']))) {
                $errors['model'] = 'Voer een model in';
            } elseif (strlen($_POST['Model']) > 20) {
                $errors['model'] = 'model mag maximaal 20 tekens bevatten';
            }
            if(empty(trim($_POST['prijs']))) {
                $errors['prijs'] = 'Voer een prijs in';
            } elseif (!is_numeric($_POST['prijs']) || $_POST['prijs'] < 0 || $_POST['prijs'] > 9999.99) {
                $errors['prijs'] = 'Voer een geldige prijs in  (0, 9999,99)';
            }
            if(empty(trim($_POST['geheugen']))) {
                $errors['geheugen'] = 'Voer een geheugen in';
            } elseif (!is_numeric($_POST['geheugen']) || $_POST['geheugen'] < 0 || $_POST['geheugen'] > 4000) {
                $errors['geheugen'] = 'Voer een geldig geheugen in (0, 4000 gb)';
            }
            if(empty(trim($_POST['besturingssysteem']))) {
                $errors['besturingssysteem'] = 'Voer een besturingssysteem in';
            } elseif (strlen($_POST['besturingssysteem']) > 20) {
                $errors['besturingssysteem'] = 'maximaal 20 tekens';
            }
            if(empty(trim($_POST['schermgrootte']))) {
                $errors['schermgrootte'] = 'Voer een schermgrootte in';
            } elseif (!is_numeric($_POST['schermgrootte']) || $_POST['schermgrootte'] < 0 || $_POST['schermgrootte'] > 10) {
                $errors['schermgrootte'] = 'voer een geldige schermgrootte in (0 - 10 inch)';
            }
            if(empty(trim($_POST['releasedatum']))) {
                $errors['releasedatum'] = 'Voer een releasedatum in';
            } elseif (!DateTime::createFromFormat('Y-m-d', $_POST['releasedatum'])) {
                $errors['releasedatum'] = 'Voer een geldig datum in (jjjj-mm-dd)';
            }
            if(empty(trim($_POST['megapixels']))) {
                $errors['megapixels'] = 'Voer het aantal megapixels in';
            } elseif (!is_numeric($_POST['megapixels']) || $_POST['megapixels'] < 0 || $_POST['megapixels' > 200]) {
                $errors['megapixels'] = 'Voor een geldig aantal  in (0, 100)';
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
            } else {
                    $data['display'] = 'flex';
                    $data['message'] = 'De gegevens zijn opgeslagen';

                    $this->smartphoneModel->create($_POST);

                    header('Refresh:3 ; url=' . URLROOT . '/SmartphoneController/index');
                }
        }
        $this->view('smartphone/create', $data);
    }

    public function update($id=NULL)
    {
        $data = [
            'title' => 'Wijzig smartphone',
            'display' => 'none',
            'message' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) ||
                empty($_POST['model']) ||
                empty($_POST['prijs']) ||
                empty($_POST['geheugen']) ||
                empty($_POST['besturingssysteem']) ||
                empty($_POST['schermgrootte']) ||
                empty($_POST['releasedatum']) ||
                empty($_POST['megapixels'])) {

                    $data['display'] = 'flex';
                    $data['message'] = 'Vul alle velden in';
                    $data['color'] = 'danger';
            }
            else {
                
            }
        }

        $data['smartphone'] = $this->smartphoneModel->getSmartphonesById($id);

        $this->view('smartphone/update', $data);
    }
}

?>