<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        
        <script>
            document.addEventListener('DOMContentLoaded', () => {                
                configDateTimeInput();                
            });

     

        <style>
       
            function configDateTimeInput() {
                flatpickr(".time_selector", { 
        
                    noCalendar: true,
                    enableTime: true,
                    dateFormat: "H:i",
                    time_24hr: false,
                    minTime: "07:00",
                    maxTime: "20:00",
                });
            }       
            
            

            .flatpickr-time .numInputWrapper {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    width: 30%;
    height: 30px;
    float: left;
}
        </script>
 
    </head>


    <div class=" sm:px-4 lg:px-6">
        <!-- centrar contenido-->
        <div class="w-11/12 md:w-11/12 lg:w-9/12 mx-auto sm:px-4 lg:px-6">
            <div class="flex justify-center mt-5 pt-8 sm:pt-0">
                <h1 class=" font-bold text-center text-3xl ">Inhabilitar fechas y horarios de atención </h1>
            </div>
        <div>
            <p align="center"></p>
            <p> <strong>Seleccione la fecha o fechas que agregará como inhábil o inhabilitará horarios</strong></p>
        
       
        <div id='calendar'></div>
        
        <label for="start">Start date:</label>

        <input type="date" id="start" name="trip-start"
               value="2018-07-22"
               min="2018-01-01" max="2018-12-31">
               <br>
        </div>
        <div>

            <script>
            document.addEventListener('DOMContentLoaded', () => {                
                configDateTimeInput();                
            });
    

            function configDateTimeInput() {
                flatpickr(".time_selector", { 
                    noCalendar: true,
                    enableTime: true,
                    dateFormat: "H:i",
                    time_24hr: false,
                    minTime: "07:00",
                    maxTime: "20:00",
                });
            }        
            
            
        </script>

            <form >
                Selecciona un horario:
                <p>
                    Inicio: <input type="time" id="hora_inicio" class="time_selector">
                    Fin: <input type="time" id="hora_fin" name="hora_fin" class="time_selector">
                </p>
            </form>
        </div>
               
        <p>* De 2 pm a 4 pm el horario es inhábil en este día</p>
         <div class="w-full md:w-6/12 md:mt-8 "> 
                <button wire:click="limpiarFiltros()" type="button" class=" btn-generico bg-blue-500 border-blue-600" type="button">
                Agregar horarios inhábiles- horario uno</button>
                
                <button wire:click="limpiarFiltros()" type="button" class=" btn-generico bg-blue-500 border-blue-600" type="button">
                Agregar día inhabil</button>
         </div>
        <div>
            <p>Listado de fechas inhabiles</p>
        </div>
        <br/>
        </div>
        
    
        <table class="egt" >
            <thead>
            <tr>
          
              <td style="front-weight:boild;"><strong> Fecha</strong></td>
          
              <td><strong>Horario<strong></td>
          
            </tr>
            </thead>
            <tr>
          
              <td>05/04/2022</td>
          
              <td>Todos</td>
            
          
          
            </tr>
            <tr>
                <td>05/04/2022</td>
            </tr>

          </table>
        </div>
</x-app-layout>