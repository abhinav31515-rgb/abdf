<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;

class AdminModuleController extends Controller
{
    public function show(string $module, BrandThemeRepository $themes): View
    {
        $brandKey = (string) request()->query('brand', 'eros');

        $moduleConfig = $this->modules()[$module] ?? [
            'title' => 'Admin Module',
            'description' => 'Module configuration not found.',
            'sections' => [],
        ];

        return view('admin.modules.show', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'moduleKey' => $module,
            'module' => $moduleConfig,
        ]);
    }

    private function modules(): array
    {
        return [
            'brand-overview' => [
                'title' => 'Brand Overview',
                'description' => 'Manage property metadata, identity assets, and lock-policy controls.',
                'sections' => [
                    'Brand Metadata' => ['Brand code', 'Property name', 'Legal entity', 'Timezone', 'Contact details'],
                    'Visual Identity' => ['Logo variants', 'Typography set', 'Color token palette', 'Property-specific accent'],
                    'Lock Policy' => ['Globally locked settings', 'Locally overridable settings', 'Approval workflow indicator'],
                ],
            ],
            'brand-hierarchy' => [
                'title' => 'Multi-property Hierarchy',
                'description' => 'View inheritance relationships across group, brand, property, and outlets.',
                'sections' => [
                    'Tree View' => ['Group > Brand > Property > Outlet', 'Inherited/overridden badges', 'Locale-specific branch indicators'],
                    'Governance' => ['Lock rule visibility', 'Override history', 'Escalation owners'],
                ],
            ],
            'section-builder' => [
                'title' => 'Section Builder',
                'description' => 'Compose pages with a component library and responsive preview canvas.',
                'sections' => [
                    'Component Library' => ['Hero', 'Cards', 'Gallery', 'Text+Media', 'CTA', 'Reviews'],
                    'Canvas' => ['Desktop / Tablet / Mobile toggles', 'Drag/drop ordering', 'Visibility toggles'],
                    'Properties Panel' => ['Spacing', 'Theme variant', 'Content bindings', 'Action links'],
                ],
            ],
            'menu-manager' => [
                'title' => 'Menu Manager',
                'description' => 'Configure nested navigation across devices, locales, and brands.',
                'sections' => [
                    'Navigation Tree' => ['Nested drag/drop', 'Link type selector', 'Parent-child validation'],
                    'Display Rules' => ['Device visibility', 'Locale visibility', 'Brand-level overrides'],
                ],
            ],
            'seo-manager' => [
                'title' => 'SEO Manager',
                'description' => 'Monitor SEO health and resolve site-level and page-level issues.',
                'sections' => [
                    'SEO Health Score' => ['Missing titles/descriptions', 'Duplicate metadata', 'Canonical warnings', 'Broken links'],
                    'Per-page Checklist' => ['Meta coverage', 'Schema status', 'Internal links', 'Indexability'],
                ],
            ],
            'seo-assistant' => [
                'title' => 'AI SEO Assistant',
                'description' => 'Generate SEO copy and schema suggestions with governance guardrails.',
                'sections' => [
                    'Prompted Actions' => ['Generate title/description', 'Generate FAQs', 'Suggest internal links', 'Suggest schema JSON-LD'],
                    'Guardrails' => ['Tone constraints', 'Max-claim policy', 'Human-approval toggle'],
                ],
            ],
            'redirect-manager' => [
                'title' => 'Redirect Manager',
                'description' => 'Create and monitor 301/302 redirects with loop-collision checks.',
                'sections' => [
                    'Redirect Table' => ['From URL', 'To URL', '301/302', 'Created by', 'Hits'],
                    'Operations' => ['CSV import/export', 'Collision warning', 'Bulk updates'],
                ],
            ],
            'media-library' => [
                'title' => 'Media Library',
                'description' => 'Manage image/video assets with metadata, rights, and usage tracking.',
                'sections' => [
                    'Asset Browser' => ['Grid/list toggle', 'Tag and rights filters', 'Usage reference search'],
                    'Asset Details' => ['Alt text', 'Caption', 'Rights expiry', 'Crop presets', 'Used-in pages'],
                ],
            ],
            'gallery-manager' => [
                'title' => 'Gallery Manager',
                'description' => 'Assemble galleries by context and define sort behavior.',
                'sections' => [
                    'Collections' => ['Property', 'Rooms', 'Dining', 'Events'],
                    'Sorting & Preview' => ['Manual/newest/featured sorting', 'Lightbox preview controls'],
                ],
            ],
            'review-inbox' => [
                'title' => 'Review Inbox',
                'description' => 'Moderate guest reviews from Google, OTA, and internal sources.',
                'sections' => [
                    'Filters' => ['Source tabs', 'Sentiment', 'Rating', 'Language'],
                    'Actions' => ['Approve for website', 'Hide', 'Pin featured', 'Assign response owner'],
                ],
            ],
            'moderation-rules' => [
                'title' => 'Moderation Rules',
                'description' => 'Define automated visibility policies for trust-safe review publishing.',
                'sections' => [
                    'Auto-rules' => ['Show only >= X rating', 'Show verified sources', 'Hide flagged content'],
                ],
            ],
            'response-center' => [
                'title' => 'Response Center',
                'description' => 'Track review-response SLA and standardize response workflows.',
                'sections' => [
                    'SLA Panel' => ['Overdue responses', 'Unanswered items', 'Assigned owners'],
                    'Workflow' => ['Pending', 'Drafted', 'Approved', 'Posted'],
                ],
            ],
            'booking-center' => [
                'title' => 'Booking Center',
                'description' => 'Search reservations and review booking/payment details in one console.',
                'sections' => [
                    'Reservations Table' => ['Guest', 'Booking code', 'Stay window', 'Status', 'Payment status'],
                    'Details Drawer' => ['Room/rate', 'Add-ons', 'Special requests', 'Audit notes'],
                ],
            ],
            'rates-inventory' => [
                'title' => 'Rates & Inventory',
                'description' => 'Control availability and rates through calendar-grid operations.',
                'sections' => [
                    'Calendar Grid' => ['Availability', 'Rate', 'Restrictions per day'],
                    'Bulk Tools' => ['Seasonal updates', 'Min-stay rules', 'Close-to-arrival toggles'],
                ],
            ],
            'offers-packages' => [
                'title' => 'Offers & Packages',
                'description' => 'Build and schedule commercial offers with room+meal+extras bundles.',
                'sections' => [
                    'Offer List' => ['Validity windows', 'Display status', 'Channels'],
                    'Package Builder' => ['Room inclusions', 'Meal plan', 'Add-on credits', 'Terms'],
                ],
            ],
            'ota-connectors' => [
                'title' => 'OTA Connectors',
                'description' => 'Configure OTA connections and mapping workflows.',
                'sections' => [
                    'Connector Status' => ['Connected/disconnected/error', 'Last sync timestamp', 'Credential health'],
                    'Mapping Wizard' => ['Room mapping', 'Rate-plan mapping', 'Policy mapping'],
                ],
            ],
            'pms-connectors' => [
                'title' => 'PMS Connectors',
                'description' => 'Manage PMS credentials, test connection, and sync-mode settings.',
                'sections' => [
                    'Connection Setup' => ['Credential form', 'Connection test', 'Field mapping'],
                    'Sync Strategy' => ['Real-time vs scheduled', 'Fallback mode', 'Retry policy'],
                ],
            ],
            'sync-center' => [
                'title' => 'Sync Command Center',
                'description' => 'Monitor queues and replay failed jobs by operational scope.',
                'sections' => [
                    'Live Queue' => ['Running jobs', 'Throughput', 'Error counts'],
                    'Manual Sync' => ['Inventory-only', 'Rates-only', 'Reservations-only'],
                ],
            ],
            'reports-analytics' => [
                'title' => 'Reports & Analytics',
                'description' => 'Track performance for booking, channel mix, SEO, and reputation.',
                'sections' => [
                    'Executive Reports' => ['Revenue trend', 'Channel performance', 'Conversion funnel'],
                    'Export Options' => ['CSV export', 'PDF snapshot', 'Scheduled email reports'],
                ],
            ],
            'users-roles' => [
                'title' => 'Users, Roles & Permissions',
                'description' => 'Define role templates and enforce permission boundaries.',
                'sections' => [
                    'Role Templates' => ['Super admin', 'Brand admin', 'Content editor', 'Revenue manager', 'Integrations manager'],
                    'Controls' => ['Permission matrix', 'Activity logs', 'Session management'],
                ],
            ],
            'system-support' => [
                'title' => 'System & Support',
                'description' => 'Run setup workflows, diagnostics, audit views, and support bundles.',
                'sections' => [
                    'Operations' => ['Setup wizard', 'Health diagnostics', 'Backup/export center'],
                    'Support' => ['Audit logs', 'Change history', 'Support package generator'],
                ],
            ],
        ];
    }
}
