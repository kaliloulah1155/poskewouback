<!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box" style="height: 50px;">
          <!-- Dark Logo-->
        </div>
        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <!-- <li class="menu-title"><span data-key="t-menu">Menu</span></li> -->
              <li class="nav-item">
                <a class="nav-link menu-link" href="/dashboard"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  {{-- <i class="ri-dashboard-2-line"></i> --}}
                  <img src="/assets/images/dashboard.svg" alt=""style='height: 25px;margin-right:5px ;'>
                  <span data-key="t-dashboards">Tableau de bord</span>
                </a>
               {{-- <div class="collapse menu-dropdown" id="sidebarDashboards">
                   <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                    </li>
                    <li class="nav-item">
                      <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-job.html" class="nav-link">
                        <span data-key="t-job">Job</span>
                        <span class="badge badge-pill bg-success" data-key="t-new">New</span>
                      </a>
                    </li>
                  </ul> 
                </div>--}}
              </li>
              <!-- end Dashboard Menu -->
              <li class="nav-item">
                <a class="nav-link menu-link" href="/demande_passeport" role="button" aria-expanded="false" aria-controls="sidebarApps">
                   <img src="/assets/images/passport.svg" alt=""style='height: 25px;margin-right:5px ;'>
                  <span data-key="t-apps">Demande de passeport</span>
                </a>
                {{--<div class="collapse menu-dropdown" id="sidebarApps">
                   <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar </a>
                    </li>
                    <li class="nav-item">
                      <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email"> Email </a>
                      <div class="collapse menu-dropdown" id="sidebarEmail">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                          </li>
                          <li class="nav-item">
                            <a href="forms-advanced.html#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates"> Email Templates </a>
                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                              <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>
                                </li>
                                <li class="nav-item">
                                  <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"> Ecommerce </a>
                      <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers"> Sellers </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects"> Projects </a>
                      <div class="collapse menu-dropdown" id="sidebarProjects">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks </a>
                      <div class="collapse menu-dropdown" id="sidebarTasks">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard"> Kanban Board </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view"> List View </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM </a>
                      <div class="collapse menu-dropdown" id="sidebarCRM">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies"> Companies </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Crypto </a>
                      <div class="collapse menu-dropdown" id="sidebarCrypto">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy & Sell </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My Wallet </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices"> Invoices </a>
                      <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-invoices-details.html" class="nav-link" data-key="t-details"> Details </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets"> Support Tickets </a>
                      <div class="collapse menu-dropdown" id="sidebarTickets">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace"> NFT Marketplace </a>
                      <div class="collapse menu-dropdown" id="sidebarnft">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace"> Marketplace </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now"> Explore Now </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live Auction </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details"> Item Details </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections"> Collections </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators"> Creators </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect"> Wallet Connect </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create NFT </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="apps-file-manager.html" class="nav-link">
                        <span data-key="t-file-manager">File Manager</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="apps-todo.html" class="nav-link">
                        <span data-key="t-to-do">To Do</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="forms-advanced.html#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs">
                        <span data-key="t-jobs">Jobs</span>
                        <span class="badge badge-pill bg-success" data-key="t-new">New</span>
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarjobs">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="apps-job-statistics.html" class="nav-link" data-key="t-candidate-list"> Statistics </a>
                          </li>
                          <li class="nav-item">
                            <a href="forms-advanced.html#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists" data-key="t-job-lists"> Job Lists </a>
                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                              <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="apps-job-lists.html" class="nav-link" data-key="t-list"> List </a>
                                </li>
                                <li class="nav-item">
                                  <a href="apps-job-grid-lists.html" class="nav-link" data-key="t-grid"> Grid </a>
                                </li>
                                <li class="nav-item">
                                  <a href="apps-job-details.html" class="nav-link" data-key="t-overview"> Overview</a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a href="forms-advanced.html#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists" data-key="t-candidate-lists"> Candidate Lists </a>
                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                              <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="apps-job-candidate-lists.html" class="nav-link" data-key="t-list-view"> List View </a>
                                </li>
                                <li class="nav-item">
                                  <a href="apps-job-candidate-grid.html" class="nav-link" data-key="t-grid-view"> Grid View</a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a href="apps-job-application.html" class="nav-link" data-key="t-application"> Application </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-job-new.html" class="nav-link" data-key="t-new-job"> New Job </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-job-companies-lists.html" class="nav-link" data-key="t-companies-list"> Companies List </a>
                          </li>
                          <li class="nav-item">
                            <a href="apps-job-categories.html" class="nav-link" data-key="t-job-categories"> Job Categories</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="apps-api-key.html" class="nav-link">
                        <span data-key="t-api-key">API Key</span>
                        <span class="badge badge-pill bg-success" data-key="t-new">New</span>
                      </a>
                    </li>
                  </ul> 
                </div>--}}
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="/renouvellement_passeport"  role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                   <img src="/assets/images/renewpassport.svg" alt=""style='height: 25px;margin-right:5px ;'>	
                  <span data-key="t-layouts">Renouvellement de passeport</span>
                  <!-- <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span> -->
                </a>
                {{--<div class="collapse menu-dropdown" id="sidebarLayouts">
                   <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                    </li>
                    <li class="nav-item">
                      <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                    </li>
                    <li class="nav-item">
                      <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                    </li>
                    <li class="nav-item">
                      <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                    </li>
                  </ul> 
                </div>--}}
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="/historique_achat"  role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                   <img src="/assets/images/listoperation.svg" alt=""style='height: 25px;margin-right:5px ;'>
                  <span data-key="t-layouts">Historique des demandes</span>
                  <!-- <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span> -->
                </a>
                <!-- <div class="collapse menu-dropdown" id="sidebarLayouts"><ul class="nav nav-sm flex-column"><li class="nav-item"><a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a></li><li class="nav-item"><a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a></li><li class="nav-item"><a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a></li><li class="nav-item"><a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a></li></ul></div> -->
              </li>
              <!-- end Dashboard Menu -->
              <!-- <li class="menu-title"><i class="ri-more-fill"></i><span data-key="t-pages">Historique des achats</span></li> -->
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
        <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>