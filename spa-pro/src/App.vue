<template>
  <v-app id="inspire">
    <v-navigation-drawer
        v-model="drawer"
        :clipped="$vuetify.breakpoint.lgAndUp"
        app
    >
      <v-list dense>
        <template v-for="item in items">
          <v-layout
              v-if="item.heading"
              :key="item.heading"
              row
              align-center
          >
            <v-flex xs6>
              <v-subheader v-if="item.heading">
                {{ item.heading }}
              </v-subheader>
            </v-flex>
            <v-flex
                xs6
                class="text-xs-center"
            >
              <a
                  href="#!"
                  class="body-2 black--text"
              >EDIT</a>
            </v-flex>
          </v-layout>
          <v-list-group
              v-else-if="item.children"
              :key="item.text"
              v-model="item.model"
              :prepend-icon="item.model ? item.icon : item['icon-alt']"
              append-icon=""
          >
            <template v-slot:activator>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title>
                    {{ item.text }}
                  </v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </template>
            <v-list-item
                v-for="(child, i) in item.children"
                :key="i"
                @click=""
            >
              <v-list-item-action v-if="child.icon">
                <v-icon>{{ child.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>
                  {{ child.text }}
                </v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>
          <v-list-item
              v-else
              :key="item.text"
              :to="item.url"
          >
            <v-list-item-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>
                {{ item.text }}
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </template>
      </v-list>

      <div v-if="$store.getters.isAuthenticated">
      <div class="pa-2">
        <v-btn block @click.prevent="logout"><v-icon left>lock</v-icon>Logout</v-btn>
      </div>
    </div>
      <div v-else>
        <div class="pa-2">
          <v-btn block @click.prevent="signIn"><v-icon left>lock_open</v-icon>Login</v-btn>
        </div>
        <div class="pa-2">
          <v-btn block @click.prevent="signUp"><v-icon left>assignment_ind</v-icon>Signup</v-btn>
        </div>
      </div>
    </v-navigation-drawer>
    <v-app-bar
        :clipped-left="$vuetify.breakpoint.lgAndUp"
        app
        color="blue darken-3"
        dark
    >
      <v-toolbar-title
          style="width: 300px"
          class="ml-0 pl-3"
      >
        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
        <router-link :to="{ name: 'home'}">
          <span class="hidden-sm-and-down title font-weight-black blue--text lighten-2">
            IBuypro logo
          </span>
      </router-link>
      </v-toolbar-title>
<!--      <v-text-field-->
<!--          flat-->
<!--          solo-inverted-->
<!--          hide-details-->
<!--          prepend-inner-icon="search"-->
<!--          label="Search"-->
<!--          class="hidden-sm-and-down"-->
<!--      ></v-text-field>-->
      <v-spacer></v-spacer>
<!--      <div v-if="$store.getters.isAuthenticated">-->
<!--        <a @click.prevent="logout" class="display-1 white&#45;&#45;text" >Logout {{username}}</a>-->

<!--      </div>-->
<!--      <div v-else>-->
<!--        <router-link :to="{name: 'signin'}" class="display-1 white&#45;&#45;text" >Login</router-link>/-->
<!--        <router-link :to="{name: 'signup'}" class="display-1 white&#45;&#45;text" >Signup</router-link>-->
<!--      </div>-->
      <v-spacer></v-spacer>

<!--      <v-btn-->
<!--          icon-->
<!--          large-->
<!--          @click="dialogAuthorization = !dialogAuthorization"-->
<!--      >-->
<!--        <v-avatar-->
<!--            size="32px"-->
<!--            item-->
<!--        >-->
<!--          <v-img-->
<!--              src="https://cdn.vuetifyjs.com/images/logos/logo.svg"-->
<!--              alt="Vuetify"-->
<!--          >-->
<!--          </v-img>-->
<!--        </v-avatar>-->
<!--      </v-btn>-->
    </v-app-bar>
    <v-content>

      <v-container
          fluid
          fill-height
      >
        <v-layout
            align-center
            justify-center
        >

          <br>
          <router-view></router-view>
        </v-layout>
      </v-container>
    </v-content>

    <v-dialog
        v-model="dialog"
        width="800px"
    >
      <v-card>
        <v-card-title class="grey darken-2">
          Create contact
        </v-card-title>
        <v-container grid-list-sm>
          <v-layout
              row
              wrap
          >
            <v-flex
                xs12
                align-center
                justify-space-between
            >
              <v-layout align-center>
                <v-avatar
                    size="40px"
                    class="mr-3"
                >
                  <img
                      src="//ssl.gstatic.com/s2/oz/images/sge/grey_silhouette.png"
                      alt=""
                  >
                </v-avatar>
                <v-text-field
                    placeholder="Name"
                ></v-text-field>
              </v-layout>
            </v-flex>
            <v-flex xs6>
              <v-text-field
                  prepend-icon="business"
                  placeholder="Company"
              ></v-text-field>
            </v-flex>
            <v-flex xs6>
              <v-text-field
                  placeholder="Job title"
              ></v-text-field>
            </v-flex>
            <v-flex xs12>
              <v-text-field
                  prepend-icon="mail"
                  placeholder="Email"
              ></v-text-field>
            </v-flex>
            <v-flex xs12>
              <v-text-field
                  type="tel"
                  prepend-icon="phone"
                  placeholder="(000) 000 - 0000"
              ></v-text-field>
            </v-flex>
            <v-flex xs12>
              <v-text-field
                  prepend-icon="notes"
                  placeholder="Notes"
              ></v-text-field>
            </v-flex>
          </v-layout>
        </v-container>
        <v-card-actions>
          <v-btn
              text
              color="primary"
          >More
          </v-btn>
          <v-spacer></v-spacer>
          <v-btn
              text
              color="primary"
              @click="dialog = false"
          >Cancel
          </v-btn>
          <v-btn
              text
              @click="dialog = false"
          >Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-dialog
        v-model="dialogAuthorization"
        max-width="500px"
    >
      <v-card>
        <v-card-title>
          Вход
        </v-card-title>
        <v-card-text>
          <v-col cols="12">
            <v-text-field label="Email*" required></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Password*" type="password" required></v-text-field>
          </v-col>
        </v-card-text>
        <v-card-actions>
          <v-btn
              color="primary"
              dark
              @click="authorization"
          >
            Войти
          </v-btn>
          <v-btn
              color="primary"
              text
              @click="dialogRegistration = !dialogRegistration"
          >
            Зарегистрироваться
          </v-btn>
          <v-btn
              color="primary"
              text
              @click="dialogAuthorization = !dialogAuthorization"
          >
            Close
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-dialog
        v-model="dialogRegistration"
        max-width="600px"
    >
      <v-card>
        <v-card-title>
          <span class="headline">User Profile</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col cols="12" sm="6" md="4">
                <v-text-field label="Legal first name*" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field label="Legal middle name" hint="example of helper text only on focus"></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field
                    label="Legal last name*"
                    hint="example of persistent helper text"
                    persistent-hint
                    required
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Email*" required></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Password*" type="password" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6">
                <v-select
                    :items="['0-17', '18-29', '30-54', '54+']"
                    label="Age*"
                    required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6">
                <v-autocomplete
                    :items="['Skiing', 'Ice hockey', 'Soccer', 'Basketball', 'Hockey', 'Reading', 'Writing', 'Coding', 'Basejump']"
                    label="Interests"
                    multiple
                ></v-autocomplete>
              </v-col>
            </v-row>
          </v-container>
          <small>*indicates required field</small>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="registrationClose">Close</v-btn>
          <v-btn color="blue darken-1" text @click="registrationSave">Save</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-app>
</template>

<script>
    import store from './store/index';

    export default {
        components: {
        },
        data: () => ({
            dialog: false,
            dialogAuthorization: false,
            dialogRegistration: false,
            drawer: null,
            source: '/',
            items: [
                {icon: 'home', text: 'Главная', url: {name: 'home'}},
                {icon: 'shop', text: 'Магазины', url: {name: 'shops'}},
                // {
                //     icon: 'keyboard_arrow_up',
                //     text: 'Профиль',
                //     'icon-alt': 'person',
                //     model: false,
                //     children: [
                //         {icon: 'add', text: 'Create label'},
                //     ],
                // },
                // {icon: 'history', text: 'Frequently contacted'},
                // {icon: 'content_copy', text: 'Duplicates'},
                // {
                //     icon: 'keyboard_arrow_up',
                //     'icon-alt': 'keyboard_arrow_down',
                //     text: 'Labels',
                //     model: true,
                //     children: [
                //         {icon: 'add', text: 'Create label'},
                //     ],
                // },
                // {
                //     icon: 'keyboard_arrow_up',
                //     'icon-alt': 'keyboard_arrow_down',
                //     text: 'More',
                //     model: false,
                //     children: [
                //         {text: 'Import'},
                //         {text: 'Export'},
                //         {text: 'Print'},
                //         {text: 'Undo changes'},
                //         {text: 'Other contacts'},
                //     ],
                // },
                // {icon: 'settings', text: 'Settings'},
                // {icon: 'chat_bubble', text: 'Send feedback'},
                // {icon: 'help', text: 'Help'},
                // {icon: 'phonelink', text: 'App downloads'},
                // {icon: 'keyboard', text: 'Go to the old version'}
            ],

        }),

        methods: {
            logout(){
              this.$store.dispatch('logout')
                  .then(()=>{
                      this.$router.push('/sign-in')
                  })
            },
            registrationSave() {
                console.log("registrationSave");
            },

            registrationClose() {
                this.dialogRegistration = !this.dialogRegistration;
                this.dialogAuthorization = !this.dialogAuthorization;
            },

            authorization() {
                console.log("authorization");
            },
            signIn(){
                this.$router.push({name: 'signin'})
            },
            signUp(){
                this.$router.push({name: 'signup'})
            }

        },
        computed: {
            username(){
                // console.log( this.$store.getters.getUsername);
                return this.$store.getters.getUsername;
            }
        },
        mounted() {

        }

    };
</script>
<style scoped lang="sass">
  .info
    margin: 50px
    color: white
    padding: 10px
  .router-link
    margin_bottom: 50px
</style>