# Hotel Platform Admin Dashboard — Full Wireframe (Product-Level)

This document defines the **complete admin wireframe** for a multi-brand hotel platform with page/content management, SEO, media, reviews, OTA/PMS sync, and booking operations.

---

## 1) Global Admin Shell (All Screens)

## 1.1 Layout Structure
- **Top Bar (fixed)**
  - Left: logo + current brand/property selector
  - Center: global search (`pages, guests, bookings, media, settings`)
  - Right: notifications, quick actions, user profile, help
- **Left Sidebar (fixed, collapsible)**
  - Dashboard
  - Brand & Identity
  - Content
    - Page Manager
    - Section Builder
    - Menu Manager
    - Theme Settings
  - SEO & Growth
    - SEO Manager
    - AI SEO Assistant
    - Redirects
  - Media
    - Media Library
    - Gallery Manager
  - Reviews & Reputation
    - Review Inbox
    - Moderation Rules
    - Response Center
  - Bookings & Revenue
    - Booking Center
    - Rates & Inventory
    - Offers & Packages
  - Integrations
    - OTA Connectors
    - PMS Connectors
    - Sync Command Center
  - Reports & Analytics
  - Users & Permissions
  - System & Support
- **Main Content Area**
  - Page header (title, breadcrumbs, quick actions)
  - Filter bar (context dependent)
  - Main widgets/tables/forms
  - Sticky save/publish action bar where relevant

## 1.2 Interaction Principles
- Sticky primary actions (`Save Draft`, `Publish`, `Sync Now`)
- Unsaved changes protection modal
- Inline validation + helper text + tooltips
- Mobile/tablet admin support with drawer sidebar and stacked cards

---

## 2) Dashboard (Home)

## 2.1 Wireframe Blocks
1. **KPI Row** (4–8 cards)
   - Today bookings
   - Occupancy
   - ADR/RevPAR
   - Revenue today
   - Sync health score
   - Review rating avg
2. **Operational Alerts Panel**
   - Failed OTA syncs
   - PMS reconciliation mismatches
   - Unanswered negative reviews
   - Pages pending approval
3. **Trend Charts Row**
   - Occupancy trend (line)
   - Revenue trend (bar)
   - Channel mix (donut)
4. **Tasks Queue**
   - Content approvals
   - Scheduled publishing due
   - SEO issues
5. **Recent Activity Feed**
   - who changed what, when

## 2.2 Dashboard Right Rail (optional)
- “Quick Create” shortcuts:
  - New page
  - New offer
  - Upload media
  - Trigger sync

---

## 3) Brand & Identity Control Center

## 3.1 Brand Overview Screen
- Brand metadata form:
  - Brand code, property name, legal name
  - Address, contact, geo, timezone
- Visual identity panel:
  - Logo variants (light/dark)
  - Typography set
  - Token palette (primary, secondary, surface, accent)
- Lock policy panel:
  - Which settings are globally locked vs property-overridable

## 3.2 Multi-property Hierarchy Screen
- Tree view: Group > Brand > Property > Outlets
- Inheritance badges:
  - `Inherited`, `Overridden`, `Locked`

---

## 4) Content Management

## 4.1 Page Manager (List)
- Table columns:
  - Title
  - Slug
  - Template
  - Status (`Draft`, `Review`, `Published`)
  - Publish At / Unpublish At
  - Locale
  - Last Edited By + Date
- Row actions:
  - Edit
  - Clone
  - Preview
  - Publish/Unpublish
  - Delete
- Bulk actions:
  - Set status
  - Add locale variant
  - Export

## 4.2 Page Editor (Detail)
- Tabs:
  1. Content
  2. SEO
  3. Schema
  4. Localization
  5. Publish Settings
  6. Revision History
- Content tab:
  - Section block stack (drag/drop)
  - Add block button (hero, cards, gallery, text, CTA, reviews)
- Publish settings:
  - Draft/Review/Publish
  - Schedule publish/unpublish
  - Assigned approver
- Sticky footer actions:
  - Save Draft / Send to Review / Publish / Preview

## 4.3 Section Builder
- Left: available section components library
- Middle: page canvas preview (desktop/tablet/mobile toggle)
- Right: section property editor

## 4.4 Menu Manager
- Nested drag-drop tree
- Link types: internal page, external URL, anchor, dynamic collection
- Visibility settings by device/locale/brand

---

## 5) Theme Settings

## 5.1 Theme Form Layout
- Header settings
  - nav style, sticky behavior, CTA config
- Hero defaults
- Global spacing and typographic scale
- Color token controls with live preview
- Component variant picker

## 5.2 Preview Modes
- Desktop / tablet / mobile
- Brand switch preview
- Before/after diff preview

---

## 6) SEO & Growth

## 6.1 SEO Manager
- Site-level SEO health score
- Critical issues list:
  - Missing titles/descriptions
  - Duplicate metadata
  - Missing canonicals
  - Broken links
- Per-page SEO checklist

## 6.2 AI SEO Assistant (LLM-powered)
- Prompted actions:
  - Generate meta title/description
  - Generate FAQs from page content
  - Suggest internal links
  - Suggest schema JSON-LD
- Guardrails panel:
  - Tone constraints
  - Max claim policy
  - Human approval required toggle

## 6.3 Redirect Manager
- Table: from, to, type (301/302), created-by, hits
- Import/export CSV
- Collision warning (redirect loops)

---

## 7) Media & Gallery

## 7.1 Media Library
- Grid/list toggle
- Filters: type, size, usage, tags, rights expiry
- Asset details drawer:
  - alt text, caption, rights info
  - crop presets
  - used-in pages

## 7.2 Gallery Manager
- Collections by context:
  - Property
  - Rooms
  - Dining
  - Events
- Sorting modes: manual, newest, featured
- Lightbox preview controls

---

## 8) Reviews & Reputation

## 8.1 Review Inbox
- Sources tabs: Google, OTA, Internal
- Sentiment filter, rating filter, language filter
- Review card actions:
  - Approve for website
  - Hide
  - Pin featured
  - Assign response owner

## 8.2 Moderation Rules
- Auto rules:
  - show only >= X rating
  - show only verified sources
  - hide flagged content

## 8.3 Response Center
- SLA panel: overdue/unanswered
- Response templates
- Status workflow: pending, drafted, approved, posted

---

## 9) Booking & Revenue

## 9.1 Booking Center
- Reservations table
- Search by guest/email/booking code
- Booking details drawer:
  - stay info
  - room/rate
  - add-ons
  - payment status

## 9.2 Rates & Inventory
- Calendar grid by room type and date
- Cells: availability, rate, restrictions
- Bulk update tools

## 9.3 Offers & Packages
- Offer list with validity windows
- Package builder (room + meals + extras)

---

## 10) Integrations

## 10.1 OTA Connectors
- Connector cards with status badges:
  - connected/disconnected/error
- Mapping wizard:
  - rooms, rate plans, policies

## 10.2 PMS Connectors
- Credential form + test connection
- Field mapping UI
- Sync mode selector (real-time/scheduled)

## 10.3 Sync Command Center
- Live queue board
- Failed jobs panel with replay button
- Manual sync scopes:
  - inventory only
  - rates only
  - reservations only

---

## 11) Reports & Analytics

- Executive overview
- Channel performance
- Conversion funnel
- SEO performance
- Reputation performance
- Export options (CSV/PDF)

---

## 12) Users, Roles, Permissions

- Role templates:
  - super admin
  - brand admin
  - content editor
  - revenue manager
  - integrations manager
- Permission matrix table
- Activity logs

---

## 13) System & Support

- Setup wizard (for non-technical operators)
- Health diagnostics dashboard
- Backup/export-import center
- Audit logs + change history viewer
- Support package generator

---

## 14) Mobile-first Admin Wireframe Notes

- Sidebar becomes bottom nav + drawer
- KPI cards stack vertically
- Tables convert to card-list with row expanders
- Sticky action bar at bottom (`Save`, `Publish`, `Sync`)
- Touch-first spacing and minimum 44px targets

---

## 15) Recommended Build Order (Execution Wireframe)

1. Global shell + role-aware navigation
2. Dashboard core + alerts
3. Page manager + editor + revisions
4. Theme + menu + section builder
5. SEO manager + AI assistant + redirects
6. Media + gallery
7. Reviews module
8. Booking + rates/inventory
9. OTA/PMS connectors + sync center
10. Setup wizard + diagnostics + support tooling

---

## 16) Wireframe Acceptance Criteria

- Every module has list + detail + action states.
- Every editable screen supports draft/review/publish where relevant.
- Every destructive action has confirmation and audit logging.
- Every key workflow is operable by non-technical users.
- All screens support mobile/tablet/desktop breakpoints.
- Admin can fully control branding, pages, SEO, media, reviews, and integrations.
