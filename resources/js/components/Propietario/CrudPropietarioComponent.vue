<template>
  <div>
    <v-app>
      <v-main>
        <v-data-table
          :headers="headers"
          :items="propietariosAll"
          sort-by="identificacion"
          :sortDesc="true"
          class="elevation-1"
        >
          <template v-slot:item.vehiculos="{ item }">
            <ul v-for="(vehiculo, index) in item.vehiculos" :key="index">
              <li>{{ vehiculo.placa }}</li>
            </ul>
          </template>

          <template v-slot:top>
            <v-toolbar flat color="white">
              <v-toolbar-title>Propietarios</v-toolbar-title>
              <v-divider class inset vertical></v-divider>
              <v-spacer></v-spacer>

              <div class="ml-2 row">
                <v-select
                  class="col-4"
                  label="Seleccione"
                  v-model="customFilter.filtro"
                  :items="['Marca', 'Nombre', 'Cedula']"
                ></v-select>
                <v-text-field
                  class="col-4"
                  append-icon="mdi-magnify"
                  label="Search"
                  single-line
                  v-model="customFilter.query"
                ></v-text-field>
                <button class="btn btn-info py-0" v-on:click="buscar()">Buscar</button>
              </div>
            </v-toolbar>
            <v-row class="ml-4">
              <v-dialog v-model="dialog" max-width="700px">
                <template v-slot:activator="{ on, attrs }">
                  <v-btn
                    class="d-flex flex-row"
                    color="green lighten-1"
                    dark
                    v-bind="attrs"
                    v-on="on"
                  >Nuevo</v-btn>
                </template>
                <v-card>
                  <v-card-title>
                    <span class="headline">{{ formTitle }}</span>
                  </v-card-title>
                  <v-card-text>
                    <v-container>
                      <v-row>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedPropietario.nombre" label="Nombre(s)"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedPropietario.apellido" label="Apellido(s)"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field
                            v-model="editedPropietario.email"
                            type="email"
                            label="Email"
                          ></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-autocomplete
                            :items="['CC', 'Pasaporte', 'Nit']"
                            v-model="editedPropietario.tipo_identificacion"
                            label="TIpo de Documento"
                          ></v-autocomplete>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field
                            type="number"
                            v-model="editedPropietario.identificacion"
                            label="Nº Documento*"
                          ></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedPropietario.ciudad" label="Ciudad"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedPropietario.direccion" label="Direccion"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedPropietario.telefono" label="Telefono"></v-text-field>
                        </v-col>

                        <v-col cols="12" sm="12" md="12">
                          <v-spacer>Zona para el vehiculo</v-spacer>
                        </v-col>

                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedVehiculo.color" label="Color"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedVehiculo.modelo" label="Modelo"></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="4">
                          <v-text-field v-model="editedVehiculo.placa" label="Placa"></v-text-field>
                        </v-col>

                        <v-col cols="12" sm="6" md="4">
                          <v-autocomplete
                            :items="['Kia', 'Renault', 'Bmw', 'Bugatti']"
                            v-model="editedPropietario.marca"
                            label="Marca"
                          ></v-autocomplete>
                        </v-col>
                      </v-row>
                    </v-container>
                  </v-card-text>

                  <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" text @click="close">Cancelar</v-btn>
                    <v-btn color="blue darken-1" text @click="save">Guardar</v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>
            </v-row>
          </template>
          <template v-slot:item.actions="{ item }">
            <v-icon small class="mr-2" @click="edit(item)">mdi-pencil</v-icon>
            <v-icon small @click="destroy(item)">mdi-delete</v-icon>
          </template>
        </v-data-table>
      </v-main>
    </v-app>
  </div>
</template>
<script src="../../scripts/propietario.js"></script>
