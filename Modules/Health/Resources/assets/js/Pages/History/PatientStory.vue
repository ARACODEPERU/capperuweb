<script setup>
    import AppLayout from '@/Layouts/Vristo/AppLayout.vue';
    import Navigation from '@/Components/vristo/layout/Navigation.vue';
    import { useForm, Link } from '@inertiajs/vue3';
    import iconSquareRotated from '@/Components/vristo/icon/icon-square-rotated.vue';
    import iconCalendarDays from '@/Components/vristo/icon/icon-calendar-days.vue';
    import iconVenusMars from '@/Components/vristo/icon/icon-venus-mars.vue';
    import iconAddressCard from '@/Components/vristo/icon/icon-address-card.vue';
    import iconCalendarDay from '@/Components/vristo/icon/icon-calendar-day.vue';

    import OdontogramaDiagram from 'Modules/Dental/Resources/assets/js/Pages/Odontograma/Diagram.vue';

    import { ref } from 'vue';
    import Allergies from './Partials/Allergies.vue';
    import PathologicalHistory from './Partials/PathologicalHistory.vue';
    import LastVitalSigns from './Partials/LastVitalSigns.vue';

    const props = defineProps({
        patient: {
            type: Object,
            default: () => ({})
        },
        allergies: {
            type: Object,
            default: () => ({})
        }
    });

    const baseUrl = assetUrl;

    const getImage = (path) => {
        return baseUrl + 'storage/'+ path;
    }

    const calculateAge = (fechaNacimiento) => {
        const hoy = new Date();
        const fechaNac = new Date(fechaNacimiento);
        let edad = hoy.getFullYear() - fechaNac.getFullYear();
        const mes = hoy.getMonth() - fechaNac.getMonth();
        
        // Si el mes actual es menor que el mes de nacimiento o si es el mismo mes
        // pero el día actual es menor que el día de nacimiento, restar 1 a la edad
        if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
            edad--;
        }

        return edad;
    }


    
</script>
<template>
    <AppLayout title="Historia">
        <Navigation :routeModule="route('health_dashboard')" :titleModule="'Salud'">
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <Link :href="route('heal_patients_list')" class="text-primary hover:underline">Pacientes</Link>
            </li>
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Historia clinica</span>
            </li>
        </Navigation>
        <div class="pt-5">
            <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 gap-5 mb-5">
                <div class="panel">
                    <div class="mb-5">
                        <div class="flex flex-col justify-center items-center">
                            <template v-if="patient.person.image">
                                <img class="w-24 h-24 rounded-full object-cover mb-5" :src="`${baseUrl}/storage/${patient.person.image}`" />
                            </template>
                            <template v-else>
                                <img :src="'https://ui-avatars.com/api/?name='+patient.person.full_name+'&size=800&rounded=false'" class="w-24 h-24 rounded-full object-cover mb-5" :alt="patient.person.full_name"/>
                            </template>
                            <p class="font-semibold text-primary text-xl">{{ patient.person.full_name }}</p>
                        </div>
                        <ul class="mt-5 flex flex-col max-w-[160px] m-auto space-y-4 font-semibold text-white-dark">
                            <li class="flex items-center gap-2">
                                <icon-address-card class="shrink-0" />
                                DNI: {{ patient.person.number }}
                            </li>
                            <li class="flex items-center gap-2">
                                <icon-calendar-days class="shrink-0" />
                                F. Nac.: {{ patient.person.birthdate }}
                            </li>
                            <li class="flex items-center gap-2">
                                <icon-calendar-day class="shrink-0" />
                                Edad: {{ calculateAge(patient.person.birthdate) }}
                            </li>
                            <li class="flex items-center gap-2">
                                <icon-venus-mars class="shrink-0" />
                                <span v-if="patient.person.gender == 'M'">Masculino</span>
                                <span v-if="patient.person.gender == 'F'">Femenino</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-4 sm:col-span-3">
                    <div class="grid grid-cols-4 gap-5">
                        <div class="panel sm:col-span-2 p-0">
                            <div class="flex items-center border-b justify-between px-5 py-2.5 dark:border-gray-800" >
                                <h5 class="font-semibold text-lg">ANTECEDENTES</h5>
                            </div>
                            <div class="p-5">
                                <div class="space-y-2 font-semibold">
                                    <Allergies :allergies="allergies" :patient="patient" /> 
                                    <PathologicalHistory />
                                </div>
                            </div>
                        </div>
                        <LastVitalSigns :patient="patient" />
                    </div>
                </div>
            </div>
            <div class="panel p-0 mt-6">
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-2">
                        <!-- Icon Block -->
                        <odontograma-diagram />
                    </div>
                </div>
            </div>

        </div>
    </AppLayout>
</template>