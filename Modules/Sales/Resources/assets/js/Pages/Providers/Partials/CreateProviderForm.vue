<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { library } from "@fortawesome/fontawesome-svg-core";
import { faTrashAlt } from "@fortawesome/free-solid-svg-icons";

const form = useForm({
    short_name: '',
    name: '',
    description: '',
    number: '',
    telephone: '',
    email: '',
    image: '',
    address: '',
    contact_telephone: '',
    contact_name: '',
    contact_email: '',
    ubigeo: ''
});

const createProvider = () => {
    form.post(route('providers.store'), {
        forceFormData: true,
        errorBag: 'createProvider',
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};

library.add(faTrashAlt);

</script>

<template>
    <FormSection @submitted="createProvider">
        <template #title>
            Proveedor Detalles
        </template>

        <template #description>
            Crear nuevo proveedor
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="short_name" value="Nombre Corto" />
                <TextInput
                    id="short_name"
                    v-model="form.short_name"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.short_name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="name" value="Nombre/Razón Social" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="description" value="Descripción" />
                <TextInput
                    id="description"
                    v-model="form.description"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.description" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="number" value="Número de RUC" />
                <TextInput
                    id="number"
                    v-model="form.number"
                    type="text"
                    class="block w-full mt-1"
                    minlength="11"
                />
                <InputError :message="form.errors.number" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="image" value="Imagen" />
                <input type="file" @input="form.image = $event.target.files[0]" />
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
            </div>
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="telephone" value="Teléfono de la Empresa" />
                <TextInput
                    id="telephone"
                    v-model="form.telephone"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.telephone" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="email" value="Email de la Empresa" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.email" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="address" value="Dirección de proveedor" />
                <TextInput
                    id="address"
                    v-model="form.address"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.address" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <label>
                    Datos de Contacto del Proveedor
                </label>
                <div class="col-span-6 sm:col-span-2">
                <InputLabel for="contact_name" value="Nombres" />
                <TextInput
                    id="contact_name"
                    v-model="form.contact_name"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.contact_name" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="contact_telephone" value="Teléfono" />
                <TextInput
                    id="contact_telephone"
                    v-model="form.contact_telephone"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.contact_telephone" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <InputLabel for="contact_email" value="Email" />
                <TextInput
                    id="contact_email"
                    v-model="form.contact_email"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <InputError :message="form.errors.contact_email" class="mt-2" />
            </div>
            </div>
        </template>

        <template #actions>
            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Guardar
            </PrimaryButton>
            <Link :href="route('providers.index')"  class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out ml-2">Ir al Listado</Link>
        </template>
    </FormSection>
</template>
