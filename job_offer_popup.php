<div id="job-offer-popup" class="job-offer-popup hidden">
    <!-- Expanded View -->
    <div id="job-offer-expanded" class="job-offer-expanded">
        <div class="job-offer-header">
            <h3 style="font-size: 1.25rem; color: var(--text-dark); margin: 0;">
                =¼ H>adáme posily do tímu!
            </h3>
            <button id="job-offer-close-btn" class="job-offer-close" aria-label="Zavriee">×</button>
        </div>
        <p style="color: var(--text-light); margin-bottom: 1rem;">
            Máa skúsenosti so seahovaním alebo si aikovný/-á pracovník/-ka?
            Pridaj sa k náamu tímu!
        </p>
        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
            <a href="tel:<?php echo COMPANY_PHONE; ?>" class="btn btn-primary" style="flex: 1; text-align: center; padding: 0.75rem 1rem; font-size: 0.875rem;">
                =Þ Zavolae
            </a>
            <button id="job-offer-collapse-btn" class="btn" style="flex: 1; background-color: var(--bg-light); color: var(--text-dark); padding: 0.75rem 1rem; font-size: 0.875rem;">
                Minimalizovae
            </button>
        </div>
    </div>

    <!-- Collapsed View -->
    <div id="job-offer-collapsed" class="job-offer-collapsed hidden">
        <span style="font-weight: 600;">=¼ H>adáme pracovníkov</span>
    </div>
</div>
